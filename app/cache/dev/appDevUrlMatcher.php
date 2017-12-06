<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // site_tch_blog_abonne_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_tch_blog_abonne_homepage')), array (  '_controller' => 'SiteTCH\\BlogAbonneBundle\\Controller\\BlogAbonneController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/abonne')) {
            // SiteTCHblogAbonne_abonne
            if ($pathinfo === '/abonne') {
                return array (  '_controller' => 'SiteTCH\\BlogAbonneBundle\\Controller\\BlogAbonneController::abonneAction',  '_route' => 'SiteTCHblogAbonne_abonne',);
            }

            // SiteTCHblogAbonne_abonnedetails
            if (0 === strpos($pathinfo, '/abonne/details') && preg_match('#^/abonne/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SiteTCHblogAbonne_abonnedetails')), array (  '_controller' => 'SiteTCH\\BlogAbonneBundle\\Controller\\BlogAbonneController::abonnedetailsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            // SiteTCHblog_accueil
            if (rtrim($pathinfo, '/') === '/blog') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'SiteTCHblog_accueil');
                }

                return array (  '_controller' => 'SiteTCH\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'SiteTCHblog_accueil',);
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // SiteTCHblog_voir
                if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'SiteTCHblog_voir')), array (  '_controller' => 'SiteTCH\\BlogBundle\\Controller\\BlogController::voirAction',));
                }

                // SiteTCHblog_ajouter
                if ($pathinfo === '/blog/ajouter') {
                    return array (  '_controller' => 'SiteTCH\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'SiteTCHblog_ajouter',);
                }

            }

            // SiteTCHblog_modifier
            if (0 === strpos($pathinfo, '/blog/modifier') && preg_match('#^/blog/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SiteTCHblog_modifier')), array (  '_controller' => 'SiteTCH\\BlogBundle\\Controller\\BlogController::modifierAction',));
            }

            // SiteTCHblog_supprimer
            if (0 === strpos($pathinfo, '/blog/supprimer') && preg_match('#^/blog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SiteTCHblog_supprimer')), array (  '_controller' => 'SiteTCH\\BlogBundle\\Controller\\BlogController::supprimerAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'SiteTCH\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // site_gktgsb_homepage
        if (0 === strpos($pathinfo, '/bonjour') && preg_match('#^/bonjour/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_gktgsb_homepage')), array (  '_controller' => 'SiteGKT\\GSBBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/GSB')) {
            // SiteGKTGSB_accueil
            if ($pathinfo === '/GSB') {
                return array (  '_controller' => 'SiteGKT\\GSBBundle\\Controller\\GSBController::indexAction',  '_route' => 'SiteGKTGSB_accueil',);
            }

            // SiteGKTGSB_listemedicament
            if ($pathinfo === '/GSB/Medicaments') {
                return array (  '_controller' => 'SiteGKT\\GSBBundle\\Controller\\GSBController::VoirListeMedicamentAction',  '_route' => 'SiteGKTGSB_listemedicament',);
            }

            // SiteGKTGSB_listefamille
            if ($pathinfo === '/GSB/Familles') {
                return array (  '_controller' => 'SiteGKT\\GSBBundle\\Controller\\GSBController::VoirListeFamilleAction',  '_route' => 'SiteGKTGSB_listefamille',);
            }

            // SiteGKTGSB_listecomposition
            if ($pathinfo === '/GSB/Compositions') {
                return array (  '_controller' => 'SiteGKT\\GSBBundle\\Controller\\GSBController::VoirListeCompositionAction',  '_route' => 'SiteGKTGSB_listecomposition',);
            }

            // SiteGKTGSB_AjouterComposition
            if ($pathinfo === '/GSB/AjouterComposition') {
                return array (  '_controller' => 'SiteGKT\\GSBBundle\\Controller\\GSBController::ajouterCompositionAction',  '_route' => 'SiteGKTGSB_AjouterComposition',);
            }

            // SiteGKTGSB_ModifierComposition
            if (0 === strpos($pathinfo, '/GSB/ModifierComposition') && preg_match('#^/GSB/ModifierComposition/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SiteGKTGSB_ModifierComposition')), array (  '_controller' => 'SiteGKT\\GSBBundle\\Controller\\GSBController::ModifierCompositionAction',));
            }

            // SiteGKTGSB_SupprimerComposition
            if (0 === strpos($pathinfo, '/GSB/SupprimerComposition') && preg_match('#^/GSB/SupprimerComposition/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SiteGKTGSB_SupprimerComposition')), array (  '_controller' => 'SiteGKT\\GSBBundle\\Controller\\GSBController::SupprimerCompositionAction',));
            }

            // SiteGKTGSB_AjouterFamille
            if ($pathinfo === '/GSB/AjouterFamille') {
                return array (  '_controller' => 'SiteGKT\\GSBBundle\\Controller\\GSBController::ajouterFamilleAction',  '_route' => 'SiteGKTGSB_AjouterFamille',);
            }

            // SiteGKTGSB_ModifierFamille
            if (0 === strpos($pathinfo, '/GSB/ModifierFamille') && preg_match('#^/GSB/ModifierFamille/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'SiteGKTGSB_ModifierFamille')), array (  '_controller' => 'SiteGKT\\GSBBundle\\Controller\\GSBController::ModifierFamilleAction',));
            }

            if (0 === strpos($pathinfo, '/GSB/Supprimer')) {
                // SiteGKTGSB_SupprimerFamille
                if (0 === strpos($pathinfo, '/GSB/SupprimerFamille') && preg_match('#^/GSB/SupprimerFamille/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'SiteGKTGSB_SupprimerFamille')), array (  '_controller' => 'SiteGKT\\GSBBundle\\Controller\\GSBController::SupprimerFamilleAction',));
                }

                // SiteGKTGSB_SupprimerMedicament
                if (0 === strpos($pathinfo, '/GSB/SupprimerMedicament') && preg_match('#^/GSB/SupprimerMedicament/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'SiteGKTGSB_SupprimerMedicament')), array (  '_controller' => 'SiteGKT\\GSBBundle\\Controller\\GSBController::SupprimerMedicamentAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
