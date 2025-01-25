
# PHP Project with MySQL Database - Containerization and CI/CD

This project is a PHP application connected to a MySQL database, fully containerized using Docker. It includes a CI/CD pipeline to automate the build, test, and publish processes for Docker containers on DockerHub.

## Project Structure

- `Dockerfile`: Defines the Docker image for the PHP application.
- `docker-compose.yml`: Configures the services for PHP and MySQL.
- `.github/workflows/ci-pipeline.yml`: CI/CD pipeline to automate the process.

## Prerequisites

Before getting started, make sure you have the following:

- **Docker** and **Docker Compose** installed on your machine.
- A **DockerHub** account to publish Docker images.
- Secrets configured in GitHub Actions:
  - `DOCKER_USERNAME`: Your DockerHub username.
  - `DOCKER_PASSWORD`: Your DockerHub password.

## Installation and Local Execution

1. Clone the repository:
   ```bash
   git clone https://github.com/Formation-alpho/php-mysql-two-tier-ci
   cd php-mysql-two-tier-ci
   ```

2. Build and start the containers:
   ```bash
   docker-compose up --build
   ```

3. Access the application:
   - The PHP application is available at [http://localhost:8101][def].
   - The MySQL database is exposed on port `3306`.

## CI/CD Pipeline

A CI/CD pipeline is configured in this project to:

- Build Docker images for the PHP application and MySQL.
- Test the application (you can add specific tests for your application).
- Publish Docker images to DockerHub.

### Pipeline Configuration

The CI/CD pipeline uses **GitHub Actions** and triggers automatically on:

- A push to the `main` branch.
- A pull request to the `main` branch.

### GitHub Secrets

Ensure the following secrets are configured in your GitHub repository:

- `DOCKER_USERNAME`: Your DockerHub username.
- `DOCKER_PASSWORD`: Your DockerHub password.

## Testing the Application

- Add specific tests to verify the functionality of your application.
- Example command to run tests locally:

  ```bash
  docker run yourdockerhubusername/php-app:latest php vendor/bin/phpunit
  ```

## Contribution

Contributions are welcome!  
Feel free to open an issue or a pull request to suggest improvements.

## License

This project is licensed under the MIT License. You are free to use, modify, and distribute it.

## Author: Otniel TAMINI


![Screenshot 2025-01-25 at 00-15-26 Accueil](screenshots/Screenshot%202025-01-25%20at%2000-15-26%20Accueil.png)

![Screenshot 2025-01-25 at 00-16-05 Inscription](screenshots/Screenshot%202025-01-25%20at%2000-16-05%20Inscription.png)

![Screenshot 2025-01-25 at 00-16-24 Connexion](screenshots/Screenshot%202025-01-25%20at%2000-16-24%20Connexion.png)

![Screenshot 2025-01-25 at 00-16-54 Liste des utilisateurs](screenshots/Screenshot%202025-01-25%20at%2000-16-54%20Liste%20des%20utilisateurs.png)

![Screenshot 2025-01-25 at 00-18-40 Update ci.yml · Formation-alpho_php-mysql-two-tier-ci@0ee3144](screenshots/Screenshot%202025-01-25%20at%2000-18-40%20Update%20ci.yml%20·%20Formation-alpho_php-mysql-two-tier-ci@0ee3144.png)


[def]: http://localhost:8080