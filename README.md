# LKWA

Lesser Known Web Attack Lab is for intermediate pentester that can test and practice lesser known web attacks such as Object Injection, XSSI, PHAR Deserialization, variables variable ..etc. Write-ups are welcome. My own walk-through is [here](https://ihackyou3000.com/2019/12/22/lesser-known-web-attacklkwa-walk-through/) .

# Installation

Just clone the git with `git clone https://github.com/weev3/LKWA` and move it to your web server and you are good to go.

* For XSSI, challenge you need to change **Allow Override None** to **Allow Override ALL** in apache2.conf file or move **apache2.conf** file to **/etc/apache2/**
* For PHAR Deserialization, you need to change **phar.readonly = On** to **phar.readonly = Off** in **php.ini** setting.

# Installation - Docker

Just run `docker-compose up` inside the _Docker_ folder and open the browser on <http://localhost:3000>.

# Current Vulns

- Blind RCE
- XSSI
- PHAR Deserialization
- PHP Object Injection
- PHP Object Injection via Cookies
- PHP Object Injection (Object Reference)
- SSRF
- Variables variable

![Image of Yaktocat](/images/lkwa.png)


# Contributors 

- Edoardo Rosa (@edoz90)
