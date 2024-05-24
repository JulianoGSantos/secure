<?php
    namespace app\Repositories\Interface;

    interface DefaultRepositoryInterface{
        public function getAll();
        public function find($id);
        public function create($data);
        }
?>