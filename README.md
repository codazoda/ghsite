# ghsite

Automatically create a simple website for a GitHub project using the README.md file as the home page. Also, optionally, creates a cname file to host the site on a custom domain.

## Installation

Link ghsite.php into your bin folder.

## Usage

Use ghsite to generate the appropriate web files, then you'll checkout the gh-pages branch and commit those files.

```
php ghsite.php "(app-name)" {app-url}
```

ghsite will create a `./docs` directory and store your index there. On GitHub you'll need to setup the repo to use this directory for gh-pages.

## Setting up GitHub

- Open your project on GitHub
- Select the *Settings* cog
- Scroll down to the *GitHub Pages* section
- Change the source to *master branch /docs folder*

## Setting up DNS

For DNS, I pointed *.joeldare.com to github so that I don't have to create a DNS entry for each site. site.joeldare.com domains will work automatically as soon as they are setup in GitHub.

- Setup a CNAME record pointing to your-username.github.io

## TODO

- Load CSS from ghsite.joeldare.com