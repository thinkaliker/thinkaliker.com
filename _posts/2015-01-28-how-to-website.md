---
layout: post
title:  "How to Website"
date:   2015-01-28 20:24:29 -0700
categories: post
permalink: /blog/how-to-website
author: Adam
image: howtowebsite.png
description: How to make your own website, from start to finish!
---
I wanted to do a technical write up of sorts, so I thought I'd walk through the process of what I did to set up my website, from domains to servers to CloudFlare. I'll try to explain each step as I did and what some alternatives could be. Any questions? Feel free to tweet at me [@thinkaliker](http://twitter.com/thinkaliker).

YMMV.

## Overview

1. Get Domain  
    1. Free TLD  
    2. Paid TLD
    3. SLD
2. Get Server  
    1. Free Server
    - Shared Hosting
    - GitHub Pages
    2. Paid Shared Server
    3. VPS
    4. Dedicated
3. Get CloudFlare
4. Get WordPress
5. Other Content
6. ????
7. Profit


## 1. Get Domain

The most important part of your website is your domain name. It's what uniquely identifies you on the internet as a destination to visit. Well, that's partially true, that's what an IP address is for (that's also partially true). So, we need to pick a good domain name!

### a. Free TLD

First, I went with a free domain. I figured, I can start a website without paying for anything. This was the initial goal. [DotTK](http://dot.tk) is where I got a free top-level domain to use all over the internet. Be warned, .TK addresses are notorious for being used for spam and malware because they are easily obtainable and free for use with anything.

The domain name control panel is where you will provide information such as IP addresses, name servers or redirections. Because I will be using CloudFlare I have skipped this step and selected name servers. This will be important in the CloudFlare section.

### b. Paid TLD

I finally decided that buying a domain from [Google Domains](http://domains.google.com/registrar) would be worth it. Keep in mind that buying a domain does not equal buying a server to host your website. It just gives you an address that your house will be built at - you still need to build a house and put stuff in it. Similar situation, provide IP addresses or use custom name servers - CloudFlare will come into play, and will be managing our DNS records. I did take the opportunity to redirect adam@thinkaliker to my regular email, and it works great.

### c. SLD

Firstly, I would recommend anyone who would like to create a website to shy away from second-level domains. They are usually free, from what I've seen but do not create the same sense of professionalism or SEO-ness (if you want to be snobby about it) as any top-level domain. A majority of the time they lack in features, such as DNS manipulation or anything at all, really. If you're in a country where this is the norm (.co.uk for example), obviously this is the societal norm and you'll be fine. No one bats a second eyelash at those SLDs but at least now you know what they are!

## 2. Get server

Now that we have a street address, we need a house. So we need a place to put our actual content, our website. We have several options here, ranging from free to not free.
### a. Free Server

Well I'm cheap. So I thought, hey, what's a free solution? After lots of googling and reading reviews I ended up with some hosting company called ServersFree. Yeah, I know, their website looks really sketchy but I don't have a better option. Maybe Hostinger but they're UK based. Which honestly might be better than "I don't know where you are" based. There is also a GitHub option, which may work out better for you. Or a VPS, which is what I will eventually get.

#### i. Shared Hosting

A free shared hosting solution would be a hoster like ServersFree. The way this works is that the hosting company has, say, 50 servers and 50 unique IPs, one per server. Each server runs virtualization software such as cPanel which allows the server to host hundreds of websites per server. The way this is accomplished is the server software will allocate a certain amount of bandwidth and hard drive space to each website. When you point your computer at that server's IP, it will do two things: fail miserably and attempt to look for a website. The unique identifier for the website is the domain name - and this is what the server uses to figure out which webpage to serve to you. Accessing the IP directly won't help because it won't have any clue where you want to go. However the IP given IS A UNIQUE IDENTIFIER, just not in the way that the shared server may understand it.

#### ii. GitHub Pages

[GitHub pages](http://pages.github.com) is another solution which may work out. I'm actually going to do a separate writeup on GitHub pages so be on the lookout for that in the near future. If you use GitHub pages you can basically skip the rest of this write-up. I cover it in [GitHub CDN](http://thinkaliker.com/blog/how-to-github-cdn). (2016 edit, I'm now using Github Pages! There are also other alternatives like GitLab, Heroku, and OpenShift that I won't cover.)

### b. Paid Shared Server

Mostly the same as the shared section above, except these are paid for. A caveat is that these servers are generally very limited - some come with *shudder* SquirrelMail, some come with MySQL databases, some don't come with anything but a hard drive and some bandwidth. Obviously paying more will get you more stuff in terms of features, but you are SHARING the physical hard drive and server with many other customers.

### c. VPS

A VPS is a very interesting combination of a shared server and a computer. It is quite literally a virtual computer hooked to the real life internet. It can do anything you want, like a computer, and can serve up anything you want - a server if you will. These are virtualized because like a shared server, they are usually virtual machines running on a bigger server in a data center somewhere. These are usually way more expensive than a shared server because of the costs needed to run one (usually a beefier server is needed). If you like to run programs that connect to the internet all the time, this is a good choice because that's literally it's entire job.

### d. Dedicated

OK, now you're just showing off. These are usually fairly expensive and is exactly as it says. It's your very own server in a data center somewhere with it's own IP and everything. If you can get one, good for you, you're probably doing a lot cooler things than I am.

## 3. Get CloudFlare

So, what's all the buzz about DNS and name servers and IP addresses? This is where CloudFlare will tie everything together. What is CloudFlare? People use it for many things, it can speed up loading time of your website by caching stuff, it can provide a small layer of protection from attackers, and it can handle your DNS records. I'm going to be using it for a bit for all three.

No matter what step you took for the last two bullet points, these step will always be the same.

1. Sign up for CloudFlare - accounts are free
2. Add a new site - put in your shiny new domain name here. NOTE: if you are using Google Domains be sure to transfer your old DNS records because it has mail forwarding information that you need to ensure that email forwarding works from Google Domain's control panel.
3. Take note of the Name Servers that CloudFlare provides to you. They are unique to your specific website and may be different for different websites you add onto your CloudFlare account.
4. Go back to your domain control panel (dotTK, Google Domains, etc) and put in your CloudFlare name server info there.
5. Edit your DNS records on CloudFlare.
    1. Go to your server hosting control panel and look for something that looks like "Server IP" or something similar. THIS IP IS A UNIQUE IDENTIFIER. The actual IP of the physical server may be different, and we will need it for WordPress. It is very important that you understand the differences and know which to use.
    2. On CloudFlare, add a new DNS entry. Make it an "A" entry and type in your domain name. Enter that server IP into the value slot.
    3. Typically you account for "thinkaliker.com" and "www", these are common DNS entries.
    4. For any additional servers you may want under this domain name, just type the subdomain you want into the name slot and the IP of the server into the value slot.
6. Click "I'm done" - it make take a few hours or even a day for the changes to propagate throughout the internet. Feel free to flush your DNS cache to see if the changes have gone through. But without actual content this isn't really useful.
7. There's other settings you can play around with in CloudFlare but the default settings are OK for now.

## 4. Get WordPress (optional)

So now you have all your website stuff pointing in all the right directions. Perfect. Let's add a blog! These instructions are going to be very specific, so if you used something different try to substitute what you have with what I have written.

1. FTP access - my hoster uses FTP to get files from my computer onto the server. Grab your favorite FTP client (MobaXterm, FileZilla, WinSCP, etc) and connect to the IP address of the server.
    1. On ServersFree it is the "IP Address". This is the IP of the physical server. Not your unique identifier.
    2. Pro tip: set up a DNS alias ("A" record) to take care of this for you! Add one with the name "server" or "ftp" or something and add the IP address indicated. Now you can connect to ftp.thinkaliker.com and bam!
    3. Depending on your hoster and your FTP client, you may need to provide a "Remote Path". On shared hosters it is typically "/public_html/".
2. Download [WordPress](http://wordpress.org) obviously. Extract somewhere because you'll need it in a second.
3. Log into the server and copy your extracted WordPress files onto the server. Wow, has it been a second already?
    1. I wanted my blog under thinkaliker.com/blog, so I created a new folder "blog" and copied the contents of the WordPress installation into that folder. If you want it as your actual website then just copy it into the root folder.
    2.If you want it on a subdomain, for example blog.thinkaliker.com, you will most likely need a separate server to host it on. Simply add it to the CloudFlare DNS record.
4. Navigate to wherever you put your blog (eg. thinkaliker.com/blog). WordPress will now ask you a bunch of questions, including access to a MySQL database.
    1. In the ServersFree control panel, scroll down and click the MySQL databases icon.
    2. Create a new database with whatever name you want and a password you can remember.
    3. Your database should now be created. Go back to WordPress and put in all relevant information.
5. That should be it! WordPress should take care of the rest.
  - You may need to double check in WordPress settings that the URL of the blog is correct (eg. It should say thinkaliker.com/blog and not just thinkaliker.com if you put it in a folder.)


## 5. Other Content

Congratulations! You should now have a fully functioning blog at least. "But Adam," you say. "I want a real website!".

Ah, but this part is up to you.

Like hands on web design? Don't know where to start? Start with [Bootstrap](http://getbootstrap.com). Lots of tutorials and handy documentation. And it's a really good framework. Responsiveness is good.

Just want something to look nice? I recommend [html5up](http://html5up.net). Lots of nice looking templates that you can modify and make your own.

Have no idea? Move your WordPress site to the main folder and customize from there!

Need a good way to edit your website? I have personally used [Brackets](http://brackets.io) and Adobe Dreamweaver (coincidentally both by Adobe but Brackets is open source), but sometimes Notepad, Sublime Text or even Vim will work, as long as you have FTP access to the server.

## 6. ????

*"I'm not seeing my changes! Why does the site not change when I upload files to it?"*

Good question. It's because we enabled CloudFlare, and it will cache your content for a certain amount of time. I personally find that enabling CloudFlare's Development Mode works pretty well, just be sure to Shift+F5 your browser so that your browser cache is refreshed as well.

*"I'm using ServersFree and I want to change domains! What do?"*

Unfortunately, what I've found is that these shared hosting servers tend to lock your content to a single domain name. The best thing to do is to create another server under your account with your new domain and copy all of your stuff over. You'll need to update your CloudFlare DNS records to point at the new IP (again, unique IP not server IP).

## 7. Profit

Hey, thanks for reading! Again, if you have any questions/corrections/additions/complaints/friend requests/concerns feel free to tweet at me on Twitter. [Or any of my other social media](http://thinkaliker.com/links). ~~I mean, you could leave a comment below but the chances of me seeing it are pretty slim.~~ (I haven't figured out commenting yet, coming later in 2016!)