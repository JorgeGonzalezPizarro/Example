FROM alpine:3.4
MAINTAINER Joeri van Dooren <ure@mororless.be>

RUN apt-get update \
    && apt-get install -y --no-install-recommends vim curl debconf subversion git apt-transport-https apt-utils \
    build-essential locales acl mailutils wget zip unzip \
    gnupg gnupg1 gnupg2

# Apache config
ADD httpd.conf /etc/apache2/httpd.conf

# ADD ssmtp

# Run scripts

RUN mkdir /scripts/pre-exec.d && \
mkdir /scripts/pre-init.d && \
chmod -R 755 /scripts && chmod -R a+rw /etc/ssmtp && chmod a+rw /etc/passwd


# Your app
ADD . /app/index.php

# Exposed Port
EXPOSE 8080

# VOLUME /app
WORKDIR /app


# Set labels used in OpenShift to describe the builder images
LABEL io.k8s.description="Alpine linux based Apache PHP Container" \
      io.k8s.display-name="alpine apache php" \
      io.openshift.expose-services="8080:http" \
      io.openshift.tags="builder,html,apache,php" \
      io.openshift.min-memory="1Gi" \
      io.openshift.min-cpu="1" \
      io.openshift.non-scalable="false"