<?php

namespace NSM\Bundle\TwigExtensionsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface {

	/**
	 * {@inheritDoc}
	 */
	public function getConfigTreeBuilder() {
		$treeBuilder = new TreeBuilder();
		$rootNode = $treeBuilder->root('nsm_twig_extensions');

		$rootNode
			->children()
				->arrayNode('enable_only')
					->prototype('scalar')->end()
					->defaultValue(array())
				->end()
			->end()
		;

		return $treeBuilder;
	}

}
