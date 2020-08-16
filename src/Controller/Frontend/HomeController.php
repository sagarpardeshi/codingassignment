<?php

namespace App\Controller\Frontend;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Bundle;
use App\Entity\Provider;

class HomeController extends AbstractController
{

    protected $apiKey;

    public function getApiKey(): ?string
    {
        $this->apiKey = 'your_api_key';
        return $this->apiKey;
    }

    /**
    * @Route("/", name="home")
    */
    public function index(Request $request)
    {

        $currency = strtoupper(($request->query->get('currency')!=null || $request->query->get('currency')!='')?($request->query->get('currency')):'USD');

        $bundles = $this->getDoctrine()->getRepository(Bundle::class)->findAll();

        $providers = $this->getDoctrine()->getRepository(Provider::class)->findAll();

        $conversion_rate = $this->convertCurrency('USD',$currency);

        $currency_list = $this->getCurrencyList();

        return $this->render('home.html.twig', [
            'bundles' => $bundles,
            'currency' => $currency,
            'providers' => $providers,
            'conversion_rate' => $conversion_rate,
            'currency_list' => $currency_list
        ]);
    }

    public function convertCurrency($from_currency,$to_currency)
    {
        $apikey = $this->getApiKey();
        $from_Currency = $from_currency;
        $to_Currency = $to_currency;
        $query =  "{$from_Currency}_{$to_Currency}";

        $json = file_get_contents("http://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
        $obj = json_decode($json, true);

        $conversion_rate = floatval($obj["$query"]);

        return $conversion_rate;
    }

    public function getCurrencyList()
    {
        $apikey = $this->getApiKey();

        $json = file_get_contents("http://free.currconv.com/api/v7/currencies?apiKey={$apikey}");
        $obj = json_decode($json, true);

        $currency_list = (array) ($obj['results']);

        return $currency_list;
    }
}