<x-layout title="Sobre - João Silva">
    <div style="padding-top: 80px;">
        <div class="container section-padding">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body p-5">
                            <h1 class="mb-4">Sobre Mim</h1>
                            
                            <div class="row mb-4">
                                <div class="col-md-4 text-center mb-4">
                                    <img src="https://placehold.co/250x250/667eea/white?text=João+Silva" 
                                         alt="João Silva" class="img-fluid rounded-circle">
                                </div>
                                <div class="col-md-8">
                                    <h3>João Silva</h3>
                                    <p class="text-muted">Desenvolvedor Full Stack</p>
                                    <p>
                                        Sou um desenvolvedor apaixonado por tecnologia com mais de 5 anos de experiência 
                                        em desenvolvimento web. Especializado em PHP, Laravel e JavaScript, sempre busco 
                                        criar soluções inovadoras e eficientes.
                                    </p>
                                </div>
                            </div>

                            <h4>Minha Jornada</h4>
                            <p>
                                Comecei minha carreira em 2019 como estagiário e desde então venho me especializando 
                                em desenvolvimento backend com PHP e Laravel. Tenho experiência tanto em projetos 
                                pequenos quanto em sistemas corporativos complexos.
                            </p>

                            <h4>O que eu faço</h4>
                            <ul>
                                <li>Desenvolvimento de aplicações web com Laravel</li>
                                <li>Criação de APIs RESTful</li>
                                <li>Integração com bancos de dados</li>
                                <li>Frontend com Bootstrap e JavaScript</li>
                                <li>Otimização de performance</li>
                            </ul>

                            <div class="text-center mt-4">
                                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">
                                    Vamos Conversar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>