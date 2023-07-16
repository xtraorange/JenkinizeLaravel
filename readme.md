# Jenkinize Laravel

Jenkinize Laravel is a utility to facilitate the configuration of your Laravel environment and setup your deployment pipeline with Jenkins. It enables you to establish your development, staging, and production environments with just a few simple steps.

## Getting Started

Follow these instructions to integrate "Jenkinize Laravel" into your existing or new Laravel project.

### Prerequisites

Before you begin, make sure you have:

- [Docker](https://www.docker.com/) installed.
- [Jenkins](https://www.jenkins.io/) installed.
- A [Laravel](https://laravel.com/) project set up.
- A [GitHub](https://github.com/) account.

### Pre-setup Steps

1. Create MySQL volumes (`project_name_env_mysql`).
2. Create environment networks (`project_name_env_network`).
3. Set up the MySQL stack using the `mysql_portainer_custom_template.txt` provided in the repository.
4. Verify the configuration in your `Jenkinsfile`.
5. Push your code to the repository and let Jenkins handle the rest.

### Installation

To install "Jenkinize Laravel", follow these steps:

1. Navigate to your Laravel project directory.
2. Require "Jenkinize Laravel" into your project using Composer:

   composer require xtraorange/jenkinize-laravel


3. In Jenkins, create a new multi-branch pipeline.
4. Choose GitHub as the branch source and provide your GitHub credentials.
5. Add your repository URL and validate it.
6. Set "Discover branches" to "All Branches".

Next, you need to publish all the assets that you want to use. You can either publish all assets by running:
  php artisan vendor:publish

Or publish specific assets by specifying their tags:
  php artisan vendor:publish --tag=jenkinsfile
  php artisan vendor:publish --tag=jenkinize-config
  php artisan vendor:publish --tag=docker
  php artisan vendor:publish --tag=docker-jenkins



### Usage

Once "Jenkinize Laravel" is installed, you can set up your environments and deployment pipeline:

1. Create a definition for each of your environments in the `jenkinize.config` file.
2. For each environment, create a corresponding `.env.[environment name]` file. Avoid storing sensitive information in this file.
3. For each environment, create a corresponding secret in Jenkins for sensitive environment variable values.

(Provide more detailed instructions here)

## Contributing

If you'd like to contribute, please fork the repository and use a feature branch. Pull requests are warmly welcome.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

### TODO

- Explore Docker registry options in Jenkins.
- Specify Jenkins Docker deployment details.
- Implement automatic deployment of an appropriate database image (perhaps create a dedicated directory for Docker files?).
- Refine stage setups.
- Write setup instructions for Jenkins and other prerequisite components.
