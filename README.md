# theophile.dev
[<img alt="Deployed with FTP Deploy Action" src="https://img.shields.io/badge/Deployed With-FTP DEPLOY ACTION-%3CCOLOR%3E?style=for-the-badge&color=0077b6">](https://github.com/SamKirkland/FTP-Deploy-Action)

This project showcases a (work in progress) personal website hosted on OVH's free 100MB hosting plan, utilizing SQLite for database management and Cloudflare's free tier for image hosting. The website is built with PHP and will incorporates various features including article management, SEO keywords, and comments.

You're welcome to use it for your own website (credit would be appreciated but not mandatory).

## Documentation

The documentation for this project can be found here: [Project: Portfolio](https://learning-php-mysql.tiddlyhost.com/#:[created[20240203150245488]])

## Overview

This repository contains all the necessary files and configurations to deploy and maintain the website. The main aspects of the project are outlined below:

## Hosting and Domain

* Hosting Provider: OVH (Free 100MB hosting plan, PHP 8.3.7)
* Database: SQLite (due to the limitations of the free hosting plan)
* Image Hosting: Cloudflare (Free tier)
* Domain Registration and DNS Anycast: €50.75 for 3 years (€1.41/month)

## Key Features

* PHP 8.3.7: The website is built using the latest version of PHP supported by OVH's hosting plan.
* SQLite: Utilized for storing articles, SEO keywords, comments, and other data.
* Cloudflare: Used for hosting images to ensure fast loading times.
* GitHub Actions: Automates deployment from the GitHub repository to the FTP server.

## Alternative Hosting Approach

WebAssembly: The project could be hosted on static file providers using WebAssembly to run PHP. This method may be slower and less private compared to server-side execution, but it is a cost-effective way to showcase similar project. In the future, I'd like to add a github action to publish the website to github page using this method in order to enable fast previews / testings.

---


Feel free to contribute, report issues, or provide feedback to help improve this project!
