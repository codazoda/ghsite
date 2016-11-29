# ghsite

Automatically create a simple website for a GitHub project using the README.md file as the home page. Optionally, creates a CNAME file to host the site on a custom domain.

## Installation

- Clone [ghsite repo](http://github.com/codazoda/ghsite) from GitHub
- Link ghsite.php into your bin folder.

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

- Setup a CNAME record pointing to your-username.github.io

## Linking to images

One strategy for including images in your README is to store them in the *./docs/image* folder and include those using a direct link such as *http://myproject.mydomain.com/image/whatever.png*. This will allow the image to work on both GitHub and on the site generated by ghsite and hosted on GitHub because both point to the site itself. It also prevents vendor lock-in if you opt to switch from GitHub to another hosting provider in the future because everything points to your own domain name and not to a GitHub domain.

## License

This project is distributed under a MIT open source license.

## TODO

- Load CSS from ghsite.joeldare.com
- Store a list of sites somewhere
- github like header