<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\View;
use App\Models\Pessoas;
use App\Models\Atendimentos;
use App\Models\Itens;
use App\Models\Lancamentos;
use App\Models\Evolucao;

class MedlynxController extends Controller
{
    private $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client(['base_uri' => 'https://comercial.medlynx.com.br/api_devtests2024_1/api/']);
    }


    private function getPessoasFromApi()
    {
        return $this->makeGetRequest('pessoas');
    }

    private function getAtendimentosFromApi()
    {
        return $this->makeGetRequest('atendimentos');
    }

    private function getItensFromApi()
    {
        return $this->makeGetRequest('itens');
    }

    private function getLancamentosFromApi()
    {
        return $this->makeGetRequest('lancamentos');
    }

    private function getEvolucaoFromApi()
    {
        return $this->makeGetRequest('evolucao');
    }

    private function makeGetRequest($endpoint)
    {
        try {
            $response = $this->httpClient->get($endpoint);
            return json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function viewAtendimentos()
    {
        $atendimentos = $this->getAtendimentosFromApi();

        return view('atendimentos', ['atendimentos' => $atendimentos]);
    }

    public function viewItens()
    {
        $itens = $this->getItensFromApi();

        return view('itens', ['itens' => $itens]);
    }

    public function viewLancamentos()
    {
        $lancamentos = $this->getLancamentosFromApi();

        return view('lancamentos', ['lancamentos' => $lancamentos]);
    }

    public function viewEvolucao()
    {
        $evolucoes = $this->getEvolucaoFromApi();

        return view('evolucoes', ['evolucoes' => $evolucoes]);
    }

    public function viewPessoas()
    {
        $pessoas = $this->getPessoasFromApi();

        return view('pessoas', ['pessoas' => $pessoas]);
    }

    public function maiorConsumo()
    {
        $lancamentos = $this->getLancamentosFromApi();
        $consumoTotal = [];

        foreach ($lancamentos as $lancamento) {
            $idItem = $lancamento['id_item'];
            $quantidade = $lancamento['quantidade'];

            if (isset($consumoTotal[$idItem])) {
                $consumoTotal[$idItem] += $quantidade;
            } else {
                $consumoTotal[$idItem] = $quantidade;
            }
        }

        arsort($consumoTotal);
        $topItens = array_slice($consumoTotal, 0, 5, true);

        $detalhesItens = [];

        foreach ($topItens as $idItem => $quantidade) {
            $detalhesItem = $this->getDetalhesItem($idItem);
            $detalhesItem['quantidade'] = $quantidade;
            $detalhesItens[] = $detalhesItem;
        }

        return $detalhesItens;
    }

    private function getDetalhesItem($idItem)
    {
        $itens = $this->getItensFromApi();

        foreach ($itens as $item) {
            if ($item['id_item'] == $idItem) {
                return [
                    'descricao' => $item['descricao'],
                ];
            }
        }

        return [];
    }

    public function viewItensMaisConsumido()
    {
        $consumos = $this->maiorConsumo();

        return view('consumos', ['consumos' => $consumos]);
    }

    public function viewCriarAtendimento()
    {
        $itensp = $this->getItensFromApi();

        return view('criar-atendimento', [
            'itensp' => $itensp,
            'apicriar' => 'https://comercial.medlynx.com.br/api_devtests2024_1/api/atendimentos/new',
        ]);

    }


}
