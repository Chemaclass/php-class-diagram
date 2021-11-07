<?php declare(strict_types=1);
namespace Smeghead\PhpClassDiagram\DiagramElement;

use Smeghead\PhpClassDiagram\DiagramElement\Arrow;

class ArrowInheritance extends Arrow {
    protected string $figure = '<|--';

    public function toString(): string {
        if (strpos($this->to, '[]') === false) {
            return sprintf('  %s %s %s', $this->to, $this->figure, $this->from);
        }
        return sprintf('  %s "1" %s "*" %s', $this->to, $this->figure, str_replace('[]', '', $this->from));
    }
}