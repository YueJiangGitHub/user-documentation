<?hh

// WARNING: Contains some auto-generated boilerplate code, see:
// HHVM\UserDocumentation\MarkdownExt\ExtractedCodeBlocks\FilterBase::addBoilerplate

namespace UseNS {

  const int CON = 100;

  function f(): void {
    echo "In function ".__FUNCTION__."\n";
  }

  class C {
    public function f(): void {
      echo "In method ".__METHOD__."\n";
    }
  }

  class D {}
  class E {}
}

namespace Hack\UserDocumentation\Statements\use\Examples\XXX {

  const int CON2 = 500;

  function f(): void {
    echo "In function ".__FUNCTION__."\n";
  }
}

namespace Hack\UserDocumentation\Statements\use\Examples\test {

  use const UseNS\CON;
  use function UseNS\f;
  //use function Hack\UserDocumentation\Statements\use\Examples\XXX\f;  // Error: name f already declared
  use type UseNS\C;
  use type UseNS\{D, E};
  use namespace Hack\UserDocumentation\Statements\use\Examples\XXX;

  <<__EntryPoint>>
  function main(): void {
  \init_docs_autoloader();


    // access const CON by fully qualified and abbreviated names

    echo "CON = ".\UseNS\CON."\n";
    echo "CON = ".CON."\n";

    // access function f by fully qualified and abbreviated names

    \UseNS\f();
    f();

    // access type C by fully qualified and abbreviated names

    $c = new \UseNS\C();
    $c->f();
    $c = new C();
    $c->f();

    // access type D by fully qualified and abbreviated names

    $d = new \UseNS\D();
    $d = new D();

    // access name f by fully qualified and abbreviated names

    \Hack\UserDocumentation\Statements\use\Examples\XXX\f();
    XXX\f();

    // access name CON2 by fully qualified and abbreviated names

    echo "XXX\CON2 = ".
      \Hack\UserDocumentation\Statements\use\Examples\XXX\CON2.
      "\n";
    echo "XXX\\CON2 = ".XXX\CON2."\n";
  }
}
