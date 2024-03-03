<?php


namespace Core;

// Un conteneur de services est un objet PHP responsable de l'instauration d'autres objets. 
// ous indiquez au conteneur comment construire l'objet, 
// puis lorsque vous en avez besoin dans votre programme, vous en demandez une.
class Container {

// tableau stockant ma cle et mon service 
protected $bindings = [];

    public function bind(string $key, $service) {

        // stocke les liaisons entre ma cle wt mon serive  
        $this->bindings[$key] = $service;
    }

    public function resolve($key) {

        // verifie si la $key est dans la configuration 
        if (! array_key_exists($key, $this->bindings)) {
            throw new \Exception("No matching binding found for {$key}");
        }

        if (array_key_exists($key, $this->bindings)) {
            $service = $this->bindings[$key];

            return call_user_func($service);
        }
    }
}