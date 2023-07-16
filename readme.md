# Jenkinize Laravel

A tool to set up and configure your Laravel environment and deployment pipeline with Jenkins. With just a few steps, you can have your development, staging, and production environments set up and ready for deployment.

## Getting Started

These instructions will help you to integrate "Jenkinize Laravel" into your existing or new Laravel project.

### Prerequisites

Before you begin, ensure you have met the following requirements:

- You have installed [Docker](https://www.docker.com/).
- You have installed [Jenkins](https://www.jenkins.io/).
- You have a [Laravel](https://laravel.com/) project.
- You have a [GitHub](https://github.com/) account.


### Presetup

1.  Create mysql volumes (project_name_env_mysql)
2.  Create environment networks (project_name_env_network)
3.  Create MySQL stack, using mysql_portainer_custom_template.txt in repo.
4.  Double check JenkinsFile config
5.  Push code and let Jenkins do it's thing.


### Installation

To install "Jenkinize Laravel", follow these steps:

1. Navigate to your Laravel project directory.
2. Use composer to require "Jenkinize Laravel" into your project:

   composer require xtraorange/jenkinize-laravel

3. Create a new multibranch in Jenkins.
4. Choose github as the source, and provide the credentials.
5. Add the repository URL and validate.
6. Set Discover branches: All Branches
7.


Make sure to publish all the assets you want, either by running
  php artisan vendor:publish
Or by specifying the assets desired:
  php artisan vendor:publish --tag=jenkinsfile
  php artisan vendor:publish --tag=jenkinize-config
  php artisan vendor:publish --tag=docker
  php artisan vendor:publish --tag=docker-jenkins


### Usage

Once "Jenkinize Laravel" is installed, you can set up your environments and deployment pipeline:
1. Create a definition for each of your environments in the jenkins.config file.
2. Create a matching .env.[environment name] for each environment.  Do not store sensitive information in this.
3. For each environment, create a secret on Jenkins for the sensitive ENV values.

- _Instructions for setting up environments and pipeline..._

## Contributing

If you'd like to contribute, please fork the repository and use a feature branch. Pull requests are warmly welcome.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

### TODO

 - Look into docker registry options in Jenkins
 - Specify Jenkins docker deployment details
 - Automatically deploy an appropriate database image (create a folder for docker files?)