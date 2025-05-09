
@extends('../themeadmin')

@section('content')

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Résultat de Recommandation</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f3f4f6;
    }
    .confetti {
      position: absolute;
      width: 10px;
      height: 10px;
      background-color: #f00;
      animation: confetti 5s ease-in-out infinite;
    }
    @keyframes confetti {
      0% { transform: translateY(0) rotate(0deg); opacity: 1; }
      100% { transform: translateY(100vh) rotate(720deg); opacity: 0; }
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      createConfetti();
    });

    function createConfetti() {
      const colors = ['#f94144', '#f3722c', '#f8961e', '#f9c74f', '#90be6d', '#43aa8b', '#577590'];
      const container = document.querySelector('.confetti-container');
      for (let i = 0; i < 100; i++) {
        const confetti = document.createElement('div');
        confetti.classList.add('confetti');
        confetti.style.left = Math.random() * 100 + 'vw';
        confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        confetti.style.width = Math.random() * 10 + 5 + 'px';
        confetti.style.height = Math.random() * 10 + 5 + 'px';
        confetti.style.animationDuration = Math.random() * 3 + 2 + 's';
        confetti.style.animationDelay = Math.random() * 5 + 's';
        container.appendChild(confetti);
      }
    }
  </script>
</head>
  <div class="confetti-container absolute inset-0 pointer-events-none"></div>

  <main class="w-full max-w-4xl mx-auto flex flex-col">
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden flex-1 flex flex-col">
      <header class="bg-gradient-to-r from-blue-500 to-indigo-600 py-6 px-6 text-white text-center">
        <svg class="h-10 w-10 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        <h1 class="text-2xl font-bold">Notre Prediction ChatBot  !</h1>
      </header>

      <!-- Scrollable Result Container -->
      <section class="p-6 overflow-y-auto flex-1">
        <h2 class="text-xl font-bold text-gray-800 mb-4 text-center">
          Bonjour, {{ Auth::user()->nom }} {{ Auth::user()->prenom }}  ! 👋
        </h2>
        <p class="text-gray-600 mb-6 text-center">
          Voici le programme de master qui correspond le mieux à votre profil académique et à vos centres d’intérêt :
        </p>

        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-xl border border-blue-100 mb-6 text-center">
          <div class="flex justify-center mb-4">
            <span class="h-16 w-16 flex items-center justify-center rounded-full bg-blue-100 text-blue-600 text-3xl">🎓</span>
          </div>
          <h3 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 mb-1">
            {{ $predictionData['chosen_master'] }}
          </h3>
          <p class="text-gray-600">Votre parcours académique idéal</p>
        </div>

        <div class="space-y-2 text-center">
          <p class="text-lg text-gray-800 font-medium">
            📊 Score de prédiction : <strong>{{ $predictionData['score'] }}</strong>
          </p>
          <p class="text-lg text-gray-800 font-medium">
            ✅ Probabilité d'acceptation : <strong>{{ $predictionData['chosen_prediction'] }}%</strong>
          </p>
        </div>

        <div class="mt-6 text-center">
          @if($predictionData['aligned_with_chosen'])
            <p class="text-green-600 font-semibold">
                🎯 Vos centres d’intérêt ({{ $predictionData['interests'] }}) sont alignés avec ce master.
            </p>            
            <p class="text-gray-600">Centres d’intérêt communs : <strong>{{ implode(', ', $predictionData['overlap_with_chosen']) }}</strong></p>
          @else
            <p class="text-red-600 font-semibold">⚠️ Vos centres d’intérêt ({{ $predictionData['interests'] }})  ne sont pas alignés avec ce master.</p>
          @endif
        </div>

        @if($predictionData['suggestions'])
          <div class="mt-8">
            <h4 class="text-lg font-semibold text-gray-800 mb-4">💡 Suggestions de masters alternatifs :</h4>
            <ul class="space-y-4">
              @foreach($predictionData['suggestions'] as $suggestion)
                <li class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                  <p><strong class="text-blue-600">{{ $suggestion['master'] }}</strong> – Confiance : {{ $suggestion['confidence'] }}%</p>
                  <p class="text-sm text-gray-600">Centres d’intérêt communs avec le mastére choisi : <strong>{{ implode(', ', $suggestion['matching_interests']) }}</strong></p>
                </li>
              @endforeach
            </ul>
          </div>
        @else
          <p class="text-gray-600 mt-6">Aucune suggestion alternative trouvée.</p>
        @endif
              <!-- AI-Generated Disclaimer -->
      <div class="bg-yellow-100 text-yellow-900 text-sm px-4 py-3 border-t border-yellow-300 text-center">
        🤖 <strong>Note :</strong> Ce résultat a été généré automatiquement par notre assistant IA. Veuillez l'interpréter comme une recommandation indicative, et non une décision officielle.
      </div>

        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a href="#" onclick="window.print()" class="inline-flex items-center px-5 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
            <svg class="h-5 w-5 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
            </svg>
            Imprimer
          </a>
          <a href="javascript:history.back()" class="inline-flex items-center px-5 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-indigo-600 rounded-md hover:from-blue-600 hover:to-indigo-700">
            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12"/>
            </svg>
            Retour
          </a>
        </div>
      </section>


    </div>
  </main>
</html>

@endsection
