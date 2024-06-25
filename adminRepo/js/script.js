// Add event listener to redirect to dashboard when "Dashboard" is clicked
const dashboardLink = document.querySelector("#dashboard-link");
if (dashboardLink) {
    dashboardLink.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default behavior of the link
        window.location.href = "index.html"; // Redirect to the dashboard page
    });
}

// Add event listener to redirect to repository when "Repository" is clicked
const repositoryLink = document.querySelector("#repository-link");
if (repositoryLink) {
    repositoryLink.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default behavior of the link
        window.location.href = "repository.html"; // Redirect to the repository page
    });
}

// Sidebar toggle script (existing script)
const sidebarToggle = document.querySelector("#sidebar-toggle");
if (sidebarToggle) {
    sidebarToggle.addEventListener("click", function () {
        document.querySelector("#sidebar").classList.toggle("collapsed");
    });
}
