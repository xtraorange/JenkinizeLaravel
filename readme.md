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


### Usage

Once "Jenkinize Laravel" is installed, you can set up your environments and deployment pipeline:

- *Instructions for setting up environments and pipeline...*

## Contributing

If you'd like to contribute, please fork the repository and use a feature branch. Pull requests are warmly welcome.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.



### TODO
Look into docker registry options in Jenkins