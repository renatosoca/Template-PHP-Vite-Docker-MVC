<?php

  function debug( $variable ): void {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
  }

  function ste( $element ): string {
    return $sanitize = htmlspecialchars( $element );
  }