let reposCache = [];

fetch("/api/github/repos")
  .then((res) => res.json())
  .then((repos) => {
    const recentesContainer = document.getElementById("cards-projeto");
    const todosContainer = document.getElementById("cards-projetoall");

    if (!recentesContainer || !todosContainer) return;

    recentesContainer.innerHTML = "";
    todosContainer.innerHTML = "";

    reposCache = repos
      .filter((repo) => !repo.fork)
      .sort(
        (a, b) => new Date(b.updated_at) - new Date(a.updated_at)
      );

    reposCache.slice(0, 3).forEach((repo, index) => {
      recentesContainer.innerHTML += gerarCard(index);
    });

    reposCache.forEach((repo, index) => {
      todosContainer.innerHTML += gerarCard(index);
    });
  })
  .catch((err) => {
    console.error(err);
  });

function gerarCard(index) {
  const repo = reposCache[index];

  return `
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="project-card"
           role="button"
           onclick="abrirModal(${index})">

        <img src="https://opengraph.githubassets.com/1/${repo.full_name}"
             alt="${repo.name}">

        <div class="overlay">
          <h3>${repo.name}</h3>

          <div class="techs">
            ${
              repo.language
                ? `<span class="badge">${repo.language}</span>`
                : ""
            }
          </div>
        </div>
      </div>
    </div>
  `;
}

function base64ToUtf8(base64) {
  return decodeURIComponent(
    escape(window.atob(base64))
  );
}

async function buscarReadme(repo) {
  try {
    const response = await fetch(
      `https://api.github.com/repos/${repo.full_name}/readme`
    );

    if (!response.ok) throw new Error();

    const data = await response.json();

    return base64ToUtf8(data.content.replace(/\n/g, ""));
  } catch {
    return null;
  }
}

window.abrirModal = async function (index) {
  const repo = reposCache[index];
  if (!repo) return;

  const modalEl = document.getElementById("projectModal");

  document.getElementById("modalTitle").textContent = repo.name;

  document.getElementById("modalImage").src =
    `https://opengraph.githubassets.com/1/${repo.full_name}`;

  document.getElementById("modalLanguage").textContent =
    repo.language || "N/A";

  const created = new Date(repo.created_at).toLocaleDateString("pt-BR");
  const updated = new Date(repo.updated_at).toLocaleDateString("pt-BR");

  document.getElementById("modalUpdated").textContent =
    created === updated
      ? `Criado em ${created}`
      : `Criado em ${created} • Atualizado em ${updated}`;

  document.getElementById("modalGithub").href = repo.html_url;

  const readmeContainer = document.getElementById("modalDescription");
  readmeContainer.innerHTML = "Carregando README...";

  const readme = await buscarReadme(repo);

  readmeContainer.innerHTML = readme
    ? marked.parse(readme)
    : repo.description || "Sem descrição";

  bootstrap.Modal.getOrCreateInstance(modalEl).show();
};
