#!/bin/bash
a2dismod mpm_event mpm_worker 2>/dev/null || true
a2enmod mpm_prefork rewrite 2>/dev/null || true
exec "$@"
