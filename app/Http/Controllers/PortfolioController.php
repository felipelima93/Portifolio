<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'E-commerce Platform',
                'description' => 'Plataforma completa de e-commerce com painel administrativo.',
                'image' => 'https://placehold.co/400x250/667eea/white?text=E-commerce',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL'],
                'demo_url' => '#',
                'github_url' => '#'
            ],
            [
                'id' => 2,
                'title' => 'Sistema de Gestão',
                'description' => 'Sistema para gerenciamento de clientes e vendas.',
                'image' => 'https://placehold.co/400x250/764ba2/white?text=Sistema+CRM',
                'technologies' => ['PHP', 'Bootstrap', 'PostgreSQL'],
                'demo_url' => '#',
                'github_url' => '#'
            ],
            [
                'id' => 3,
                'title' => 'API RESTful',
                'description' => 'API robusta para aplicações mobile e web.',
                'image' => 'https://placehold.co/400x250/f093fb/white?text=API+REST',
                'technologies' => ['Laravel', 'JWT', 'Redis'],
                'demo_url' => '#',
                'github_url' => '#'
            ]
        ];

        $skills = [
            ['name' => 'PHP', 'level' => 90],
            ['name' => 'Laravel', 'level' => 85],
            ['name' => 'JavaScript', 'level' => 80],
            ['name' => 'Bootstrap', 'level' => 85],
            ['name' => 'MySQL', 'level' => 80],
            ['name' => 'Git', 'level' => 75]
        ];

        return view('portfolio.index', compact('projects', 'skills'));
    }

    public function about()
    {
        return view('portfolio.about');
    }

    public function contact()
    {
        return view('portfolio.contact');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000'
        ]);

        // Aqui você salvaria no banco ou enviaria email
        // Por simplicidade, vamos apenas retornar sucesso

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}