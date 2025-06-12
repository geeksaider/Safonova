#!/bin/sh

watchexec -r -e php --poll 250ms npm run build &

exec caddy run --config /etc/caddy/Caddyfile
