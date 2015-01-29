<?php
require 'mojo-auth.php';

print_r(MojoAuth::getAuth('123', 'sikrit', 300000));
print_r(MojoAuth::getAuth(null, 'sikrit'));
