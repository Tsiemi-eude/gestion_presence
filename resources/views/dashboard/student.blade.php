

    <div class="w-full block mt-8 bg-white">
        <div class="flex flex-wrap sm:flex-no-wrap justify-between">
            <div class="w-full sm:w-1/2 mr-2 mb-6">
                
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Nom : 
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="block text-gray-600 font-bold">{{ $student->user->name }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Email :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->user->email }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Classe :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold">{{ $student->class->class_name }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Roll Number :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->roll_number }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Telephone :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->phone }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Genre :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->gender }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Date de naissance :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->dateofbirth }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Adresse actuelle :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->current_address }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        adresse permanente :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $student->permanent_address }}</span>
                    </div>
                </div>
                
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Parent d'élève :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold">{{ $student->parent->user->name }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Courriel des parents :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold">{{ $student->parent->user->email }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Téléphone des parents :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold">{{ $student->parent->phone }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-3">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Adresse des parents :
                        </label>
                    </div>
                    <div class="md:w-2/3 block text-gray-600 font-bold">
                        <span class="text-gray-600 font-bold">{{ $student->parent->current_address }}</span>
                    </div>
                </div>
    
    
            </div>   
            
            

            <div class="w-full sm:w-1/2 mr-2 mb-6">
                <div class="flex items-center bg-gray-600">
                    <div class="w-1/3 text-left text-white py-2 px-4 font-semibold">Code</div>
                    <div class="w-1/3 text-left text-white py-2 px-4 font-semibold">Cours</div>
                    <div class="w-1/3 text-right text-white py-2 px-4 font-semibold">Professeur</div>
                </div>
                @foreach ($student->class->subjects as $subject)
                    <div class="flex items-center justify-between border border-gray-200 -mb-px">
                        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ $subject->subject_code }}</div>
                        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ $subject->name }}</div>
                        <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-medium">{{ $subject->teacher->user->name }}</div>
                    </div>
                @endforeach

                
            </div>

            

        </div>

        <div class="w-full px-0 md:px-6 py-4">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">Mon relevé de présence</h2>
            </div>
            <div class="flex items-center bg-gray-600">
                <div class="w-1/4 text-left text-white py-2 px-4 font-semibold">Date</div>
                <div class="w-1/4 text-left text-white py-2 px-4 font-semibold">Classe</div>
                <div class="w-1/4 text-left text-white py-2 px-4 font-semibold">Professeur</div>
                <div class="w-1/4 text-right text-white py-2 px-4 font-semibold">Présence</div>
            </div>
            @foreach ($student->attendances as $attendance)
                <div class="flex items-center justify-between border border-gray-200 -mb-px">
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium">{{ $attendance->attendence_date }}</div>
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium">{{ $attendance->class->class_name }}</div>
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium">{{ $attendance->teacher->user->name }}</div>
                    <div class="w-1/4 text-right text-gray-600 py-2 px-4 font-medium">
                        @if($attendance->attendence_status)
                            <span class="text-xs text-white bg-green-500 px-2 py-1 rounded-custom">Present</span>
                        @else
                            <span class="text-xs text-white bg-red-500 px-2 py-1 rounded-custom">Absent</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    