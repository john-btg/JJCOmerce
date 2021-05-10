<?php

namespace Container27xfS6U;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ArrayTransformerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Serializer.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/MetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/AdvancedMetadataFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/MetadataFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/DriverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Driver/LazyLoadingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/GraphNavigatorFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/DeserializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/HandlerRegistryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/HandlerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Handler/LazyHandlerRegistry.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/ObjectConstructorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/DoctrineObjectConstructor.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Construction/UnserializeObjectConstructor.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Accessor/AccessorStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Accessor/DefaultAccessorStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/EventDispatcher/EventDispatcherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/EventDispatcher/EventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/EventDispatcher/LazyEventDispatcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/GraphNavigator/Factory/SerializationGraphNavigatorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/SerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/JsonSerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/XmlSerializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/DeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/JsonDeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Visitor/Factory/XmlDeserializationVisitorFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/ClearableCacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/metadata/src/Cache/FileCache.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ContextFactory/SerializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/ContextFactory/DeserializationContextFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/ContextFactory/ConfiguredContextFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Type/ParserInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Type/Parser.php';

        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'metadata_driver' => ['services', 'jms_serializer.metadata_driver', 'getJmsSerializer_MetadataDriverService', true],
        ], [
            'metadata_driver' => '?',
        ]), 'metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);
        $a->setCache(($container->privates['jms_serializer.metadata.cache.file_cache'] ?? ($container->privates['jms_serializer.metadata.cache.file_cache'] = new \Metadata\Cache\FileCache(($container->targetDir.''.'/jms_serializer')))));
        $a->setIncludeInterfaces(false);
        $b = new \JMS\Serializer\Handler\LazyHandlerRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jms_serializer.array_collection_handler' => ['privates', 'jms_serializer.array_collection_handler', 'getJmsSerializer_ArrayCollectionHandlerService', true],
            'jms_serializer.constraint_violation_handler' => ['privates', 'jms_serializer.constraint_violation_handler', 'getJmsSerializer_ConstraintViolationHandlerService', true],
            'jms_serializer.datetime_handler' => ['privates', 'jms_serializer.datetime_handler', 'getJmsSerializer_DatetimeHandlerService', true],
            'jms_serializer.form_error_handler' => ['privates', 'jms_serializer.form_error_handler', 'getJmsSerializer_FormErrorHandlerService', true],
            'jms_serializer.iterator_handler' => ['privates', 'jms_serializer.iterator_handler', 'getJmsSerializer_IteratorHandlerService', true],
        ], [
            'jms_serializer.array_collection_handler' => '?',
            'jms_serializer.constraint_violation_handler' => '?',
            'jms_serializer.datetime_handler' => '?',
            'jms_serializer.form_error_handler' => '?',
            'jms_serializer.iterator_handler' => '?',
        ]), [1 => ['ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection']], 'Symfony\\Component\\Validator\\ConstraintViolationList' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson']], 'Symfony\\Component\\Validator\\ConstraintViolation' => ['xml' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'], 'json' => [0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval']], 'Symfony\\Component\\Form\\Form' => ['xml' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormToxml'], 'json' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormTojson']], 'Symfony\\Component\\Form\\FormError' => ['xml' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorToxml'], 'json' => [0 => 'jms_serializer.form_error_handler', 1 => 'serializeFormErrorTojson']], 'JMS\\Serializer\\Handler\\iterable' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Iterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'ArrayIterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']], 'Generator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'serializeIterable']]], 2 => ['ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'xml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'], 'yml' => [0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection']], 'DateTime' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml']], 'DateTimeImmutable' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml']], 'DateInterval' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml']], 'DateTimeInterface' => ['json' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromJson'], 'xml' => [0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromXml']], 'JMS\\Serializer\\Handler\\iterable' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterable'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterable']], 'Iterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']], 'ArrayIterator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeIterator']], 'Generator' => ['json' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator'], 'xml' => [0 => 'jms_serializer.iterator_handler', 1 => 'deserializeGenerator']]]]);
        $c = new \JMS\Serializer\Accessor\DefaultAccessorStrategy();
        $d = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jms_serializer.doctrine_proxy_subscriber' => ['privates', 'jms_serializer.doctrine_proxy_subscriber', 'getJmsSerializer_DoctrineProxySubscriberService', true],
            'jms_serializer.stopwatch_subscriber' => ['privates', 'jms_serializer.stopwatch_subscriber', 'getJmsSerializer_StopwatchSubscriberService', true],
        ], [
            'jms_serializer.doctrine_proxy_subscriber' => '?',
            'jms_serializer.stopwatch_subscriber' => '?',
        ]));
        $d->setListeners(['serializer.pre_serialize' => [0 => [0 => [0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => NULL], 1 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Persistence\\Proxy'], 2 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy'], 3 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ORM\\PersistentCollection'], 4 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\MongoDB\\PersistentCollection'], 5 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\ODM\\PHPCR\\PersistentCollection'], 6 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Persistence\\Proxy'], 7 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'Doctrine\\Common\\Persistence\\Proxy'], 8 => [0 => [0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'], 1 => NULL, 2 => NULL, 3 => 'ProxyManager\\Proxy\\LazyLoadingInterface']], 'serializer.post_serialize' => [0 => [0 => [0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'], 1 => NULL, 2 => NULL, 3 => NULL]]]);
        $e = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();
        $e->setOptions(1216);
        $f = new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory();
        $f->setFormatOutput(true);
        $g = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory();
        $g->setOptions(0);

        return $container->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, [2 => new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory($a, $b, new \JMS\Serializer\Construction\DoctrineObjectConstructor(($container->services['doctrine'] ?? $container->load('getDoctrineService')), new \JMS\Serializer\Construction\UnserializeObjectConstructor(), 'null'), $c, $d, NULL), 1 => new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory($a, $b, $c, $d, NULL)], ['json' => $e, 'xml' => $f], ['json' => $g, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()], ($container->services['jms_serializer.serialization_context_factory'] ?? ($container->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->services['jms_serializer.deserialization_context_factory'] ?? ($container->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory())), ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }
}
