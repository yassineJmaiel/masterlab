<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Program Recommendation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.25);
        }
    </style>
</head>
<body class="min-h-screen py-12 px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
    <div class="w-full max-w-md">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Program Recommendation</h1>
            <p class="text-gray-600">Fill in your details to get your master's program recommendation</p>
        </div>
        
        <div class="bg-white shadow-xl rounded-xl p-8 mb-8">
            <form action="" method="POST" class="space-y-6">
                @csrf
                
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" name="name" id="name" required 
                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                        placeholder="Enter your name">
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="GPA" class="block text-sm font-medium text-gray-700 mb-1">GPA</label>
                        <input type="number" step="0.1" name="GPA" id="GPA" required 
                            class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                            placeholder="0.0 - 4.0">
                    </div>
                    <div>
                        <label for="AI_Grade" class="block text-sm font-medium text-gray-700 mb-1">AI Grade</label>
                        <input type="number" step="0.1" name="AI_Grade" id="AI_Grade" required 
                            class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                            placeholder="0.0 - 100.0">
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="Math_Grade" class="block text-sm font-medium text-gray-700 mb-1">Math Grade</label>
                        <input type="number" step="0.1" name="Math_Grade" id="Math_Grade" required 
                            class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                            placeholder="0.0 - 100.0">
                    </div>
                    <div>
                        <label for="English_Grade" class="block text-sm font-medium text-gray-700 mb-1">English Grade</label>
                        <input type="number" step="0.1" name="English_Grade" id="English_Grade" required 
                            class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                            placeholder="0.0 - 100.0">
                    </div>
                </div>
                
                <div>
                    <label for="Interests" class="block text-sm font-medium text-gray-700 mb-1">Interests</label>
                    <input type="text" name="Interests" id="Interests" required 
                        class="form-input w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                        placeholder="e.g. AI, Robotics, Data Science (comma separated)">
                    <p class="mt-1 text-xs text-gray-500">Separate multiple interests with commas</p>
                </div>
                
                <div class="pt-4">
                    <button type="submit" 
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-200">
                        Get Recommendation
                    </button>
                </div>
            </form>
        </div>
        
        <div class="text-center text-sm text-gray-500">
            <p>Your data is used only for program recommendation purposes</p>
        </div>
    </div>
</body>
</html>