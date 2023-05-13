<?php

interface Template {
    public function delete($id);
    public function all();
}

interface Template2 {
    public function destroy($id);
}

abstract class Model {
    abstract public function insert(array $params);
    abstract public function update($id, array $params);
}

class User extends Model implements Template {
    public function insert(array $params, $status = 'new') {

    }
    public function update($id, array $params) {

    }
    public function delete($id) {

    }
    public function all() {

    }
    public function destroy() {
        
    }
}

?>