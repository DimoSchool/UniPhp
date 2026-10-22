FROM php:8.2-cli
COPY ./labs /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "sleep", "infinity" ]