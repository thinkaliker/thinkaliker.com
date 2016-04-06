---
layout: post
title:  "How to GitHub CDN"
date:   2015-02-20 21:55:29 -0700
categories: post
permalink: /blog/how-to-github-cdn
author: Adam
image: githubcdn.png
description: Create your very own CDN with GitHub!
---

I found out how easy it was to use [GitHub Pages](http://pages.github.com) to create your very own free CDN for static files.

Assuming you followed [How to Website](http://thinkaliker.com/blog/how-to-website), you should now have a working domain name with CloudFlare enabled.

So if you have lots of STATIC content like CSS or SOME JavaScript files, you can host them on a global CDN for free, courtesy of GitHub Pages.

YMMV: I found that putting my application JS for AngularJS on CDN actually made my browser crash. So only static files that can be loaded independent of the page should be put on the CDN. I would also not recommend using this for images because there are better services to use (imgur, minus, etc.).

GitHub Pages provies a free hosting solution at http://yourusername.github.io - you can upload an index.html page to your repository and it will show up. Fine, easy.

But you can also upload JS and CSS files....which you can then link to from your website! And if your server is slow, a CDN will take the load off of your server.

1. Make sure your GitHub Pages is set up correctly.
    1. Create a new repository called `yourusername.github.io` (yes, with the .github.io) and clone.
    2. Add any files you want to have delivered from the CDN to the repo and push.
    3. Create a new file named "CNAME" in the root of your repo and add the direct URL of your CDN. We will redirect it in the next step. (For example, I use "cdn.thinkaliker.com"). At this point your GitHub,io URL will redirect to your nonexistent subdomain.
2. Redirect CloudFlare to point your CDN location to GitHub Pages.
    1. Create a new CNAME entry.
    2. Use "cdn" or whatever you want (must be same as in CNAME file above).
    3. Add your `yourusername.github.io` to the value fields as an alias.

And that's it! After this, every time you need to update or add any files, simply push to GitHub, and it will work immediately!