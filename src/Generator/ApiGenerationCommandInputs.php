<?php

namespace Essa\APIToolKit\Generator;

class ApiGenerationCommandInputs
{
    public function __construct(
        private string $model, 
        private array $userChoices, 
        private SchemaDefinition $schema, 
        private string $pathGroup,
        private string $pluginPath, // New property for plugin path
        private string $baseNamespace // New property for base namespace
    ) {}

    public function getModel(): string
    {
        return $this->model;
    }

    public function getUserChoices(): array
    {
        return $this->userChoices;
    }

    public function getSchema(): SchemaDefinition
    {
        return $this->schema;
    }

    public function isOptionSelected(string $option): bool
    {
        return $this->userChoices[$option];
    }

    public function getPathGroup(): string
    {
        return $this->pathGroup;
    }

    public function setPathGroup(string $pathGroup): void
    {
        $this->pathGroup = $pathGroup;
    }

     // Getter for pluginPath
     public function getPluginPath(): string
     {
         return $this->pluginPath;
     }
 
     // Getter for baseNamespace
     public function getBaseNamespace(): string
     {
         return $this->baseNamespace;
     }
}
