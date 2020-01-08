FROM webdevops/php-nginx:alpine

# Run upgrade and install git
RUN apk update && apk upgrade && apk add git

# Install LKWA
RUN mkdir -p /usr/share/nginx/html
RUN git clone https://github.com/weev3/LKWA.git /usr/share/nginx/html

# Clean container
RUN apk del git
