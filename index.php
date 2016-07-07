<?php header('Content-type: application/json') ?>{
  "status": "ok",
  "message": "This is my demo API (v1)",
  "hostname": "<?php echo getenv('HOSTNAME') ?>"
}
