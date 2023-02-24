<?php
  namespace Classes;

  class Pagination {
    public int $currentPage;
    public int $totalPages;
    public int $totalItems;
    public int $itemsPerPage;
    public string $url;

    public function __construct( int $totalItems, int $itemsPerPage = 10, int $currentPage = 1, string $url = '' ) {
      $this->totalItems = $totalItems;
      $this->itemsPerPage = $itemsPerPage;
      $this->totalPages = ceil( $totalItems / $itemsPerPage );
      $this->currentPage = $currentPage;
      $this->url = $url;
    }

    public function getLimit(): string {
      $offset = ( $this->currentPage - 1 ) * $this->itemsPerPage;
      return "$offset, $this->itemsPerPage";
    }

    public function getPages(): array {
      $pages = [];
      for ( $i = 1; $i <= $this->totalPages; $i++ ) {
        $pages[] = [
          'number' => $i,
          'current' => $i === $this->currentPage,
          'url' => $this->url . "?page=$i"
        ];
      }
      return $pages;
    }
  } 