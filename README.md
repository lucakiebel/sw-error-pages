# STAR WARS ERROR PAGES


Star Wars Error Pages are a fun, user friendly and smart way to show your customers that *they went down a path that you can't follow*, that *these are not the sites they were looking for* or some other bad Star Wars themed pun 😋

This Project Features:
  - The wonderful [BB-8 CSS-Animation](https://www.youtube.com/watch?v=QZdj42liTtU) by DevTips
  - The amazing [piece of art](https://dribbble.com/shots/2408834-BB-8) by Justas Galaburda this was based on
  - PHP to make the Pages work as they should
  - Some .htaccess magic 🙌
  - and all the important [HTTP/1.1 Statuscodes](https://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html)

### Installation Requirements

* [PHP 7.0](http://php.net/downloads.php)
* [APACHE 2.4](https://httpd.apache.org/)

### Installation

Download and extract the [latest release](https://github.com/lucakiebel/sw-error-pages/archive/master.zip) to your server.

Install the dependencies and restart your server.

Or install using the CLI:

```sh
$ git clone https://github.com/lucakiebel/sw-error-pages.git
$ cd sw-error-pages
$ cp * /var/www/html/
$ cd /var/www/html/
$ # make sure you don't have any other ErrorDocument lines in your
$ # .htaccess 
$ cat htaccess.txt >> .htaccess
$ rm htaccess.txt
```

## Comming Versions

* Adding a config.php 🤑
* Search Bar Support 
* Redirecting to homepage after Set Time

License
----

[the Unlicense](http://unlicense.org)

Version
----

1.0
