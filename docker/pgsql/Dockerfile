FROM postgres:14-alpine

ONBUILD RUN psql -U project-name -d project-name -c "create extension unaccent;"
