<?php header('Content-type: application/json') ?>{
  "status": "ok",
  "message": "This is my demo API",
  "hostname": "<?php echo getenv('HOSTNAME') ?>"
}
