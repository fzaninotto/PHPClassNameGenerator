<?php

namespace PHPClassNameGenerator;

/**
 * Provider for the Faker generator
 * @see https://github.com/fzaninotto/Faker#faker-internals-understanding-providers
 */
class ClassNameProvider extends \Faker\Provider\Base
{
    protected static $classNameCore = array('Access', 'Alias', 'Annotation', 'Application', 'Argument', 'Array', 'Attrib', 'Attribute', 'Authentication', 'Bundle', 'Button', 'Cache', 'Callback', 'Check', 'Checkbox', 'Choice', 'Class', 'Client', 'Closure', 'Collection', 'CompilerPass', 'Config', 'Configuration', 'Console', 'Constraint', 'Container', 'Controller', 'Cookie', 'Css', 'Data', 'Definition', 'DepencencyInjection', 'Dialog', 'Directory', 'Element', 'Email', 'Engine', 'Error', 'Event', 'Exception', 'Expression', 'Extension', 'Failure', 'Field', 'File', 'Filesystem', 'Filter', 'Form', 'Function', 'Guess', 'Hash', 'History', 'Identity', 'Input', 'Json', 'Kernel', 'Key', 'Layout', 'Link', 'List', 'Locale', 'Metadata', 'MimeType', 'Name', 'Node', 'Option', 'Package', 'Parameter', 'Password', 'Path', 'Process', 'Property', 'Radio', 'Range', 'Reference', 'Request', 'Resource', 'Response', 'Scope', 'Service', 'Session', 'Shell', 'Stopwatch', 'Storage', 'Store', 'Stream', 'String', 'Style', 'Success', 'Template', 'Time', 'Timezone', 'Token', 'Transformation', 'Tree', 'Url', 'Xml', 'XPath', 'Yaml');

    protected static $classNameSuffix = array('Annotation', 'Argument', 'Bag', 'Builder', 'Bundle', 'Cache', 'Callback', 'Chain', 'Clearer', 'Collector', 'Command', 'Comparator', 'Compiler', 'Constraint', 'Container', 'Context', 'Decorator', 'Definition', 'Delegate', 'Dispatcher', 'Dumper', 'Edge', 'Element', 'Encoder', 'Engine', 'EntryPoint', 'Error', 'Escaper', 'Event', 'Exception', 'Exception',  'Exception', 'Expression', 'Extension', 'Extractor', 'Factory', 'Field', 'File', 'Finder', 'Form', 'Formatter', 'Generator', 'Graph', 'Guess', 'Guesser', 'Handler', 'Header', 'Helper', 'Input', 'Interface', 'Interface', 'Interface', 'Interface', 'Iterator', 'Layout', 'Listener', 'Loader', 'Locale', 'Locator', 'Logger', 'Map', 'Mapper', 'Matcher', 'Metadata', 'Node', 'Normalizer', 'Option', 'Output', 'Package', 'Parameter', 'Parser', 'Pass', 'Process', 'Processor', 'Profiler', 'Proxy', 'Reference', 'Request', 'Resolver', 'Resource', 'Response', 'Router', 'Rule', 'Scope', 'Sequence', 'Serializer', 'Service', 'Set', 'Shell', 'Stack', 'Storage', 'Strategy', 'Stream', 'Style', 'Tester', 'Tokenizer', 'Transformer', 'Type', 'Validator', 'View', 'Warmer', 'Writer');

    protected static $classNamePrefix = array('Abstract', 'Alias', 'Base', 'Basic', 'Boolean', 'Combined', 'Compiled', 'Custom', 'Debug', 'Default', 'Delegating', 'Denormalizable', 'Digest', 'Duplicate', 'Executable', 'Fix', 'Forbidden', 'Frozen', 'Generic', 'Global', 'Group', 'Inline', 'Introspectable', 'Invalid', 'Lazy', 'Mandatory', 'Missing', 'Mock', 'Multiple', 'Namespaced', 'Native', 'Not', 'Null', 'Parent', 'Persistent', 'Prototype', 'Recursive', 'Redirectable', 'Repeated', 'Reversed', 'Scalar', 'Simple', 'Sortable', 'Spl', 'Streaming', 'Tagged', 'Traceable', 'Unexpected', 'Universal', 'Variable', 'Virtual', 'Warmable'
    );
    
    protected static $topLevelNamespaceElement = array('Symfony', 'Doctrine', 'Monolog', 'Assetic', 'Silex');
    
    protected static $classNameFormats = array(
        '{{classNamePrefix}}{{classNameCore}}{{classNameSuffix}}{{classNameCore}}{{classNameSuffix}}',
        '{{classNamePrefix}}{{classNameCore}}{{classNameSuffix}}{{classNamePrefix}}{{classNameSuffix}}',
        '{{classNamePrefix}}{{classNameCore}}{{classNameSuffix}}',
        '{{classNamePrefix}}{{classNameCore}}',
        '{{classNamePrefix}}{{classNameSuffix}}',
        '{{classNameCore}}{{classNameSuffix}}{{classNamePrefix}}{{classNameCore}}{{classNameSuffix}}',
        '{{classNameCore}}{{classNameSuffix}}{{classNameCore}}{{classNameSuffix}}',
        '{{classNameCore}}{{classNameSuffix}}{{classNameSuffix}}',
        '{{classNameCore}}{{classNameSuffix}}',
        '{{classNameCore}}{{classNameCore}}',
        '{{classNameSuffix}}{{classNameSuffix}}',
        '{{classNameSuffix}}',
    );

    protected static $namespaceElementFormats = array(
        '{{classNameCore}}',
    );

    protected static $namespaceFormats = array(
        '{{topLevelNamespaceElement}}\\{{namespaceElement}}\\',
        '{{topLevelNamespaceElement}}\\{{namespaceElement}}\\{{namespaceElement}}',
        '{{topLevelNamespaceElement}}\\{{namespaceElement}}\\{{namespaceElement}}\\{{namespaceElement}}',
        '{{topLevelNamespaceElement}}\\{{namespaceElement}}\\{{namespaceElement}}\\{{namespaceElement}}\\{{namespaceElement}}',
    );
    
    /**
     * @example 'CompilerPass'
     */
    public static function classNameCore()
    {
        return static::randomElement(static::$classNameCore);
    }

    /**
     * @example 'Scalar'
     */
    public static function classNamePrefix()
    {
        return static::randomElement(static::$classNamePrefix);
    }

    /**
     * @example 'Interface'
     */
    public static function classNameSuffix()
    {
        return static::randomElement(static::$classNameSuffix);
    }

    /**
     * @example 'ScalarCompilerPassInterface'
     */
    public function className()
    {
        $format = static::randomElement(static::$classNameFormats);
        return $this->generator->parse($format);
    }

    /**
     * @example 'Symfony'
     */
    public function topLevelNamespaceElement()
    {
        $format = static::randomElement(static::$topLevelNamespaceElement);
        return $this->generator->parse($format);
    }

    /**
     * @example 'Tree'
     */
    public function namespaceElement()
    {
        $format = static::randomElement(static::$namespaceElementFormats);
        return $this->generator->parse($format);
    }

    /**
     * @example 'Tree\Filter\Form'
     */
    public function namespaceName()
    {
        $format = static::randomElement(static::$namespaceFormats);
        return $this->generator->parse($format);
    }

    /**
     * @example 'Tree\Filter\Form\ScalarCompilerPassInterface'
     */
    public function namespacedClassName()
    {
        return $this->namespaceName() . $this->className();
    }


}