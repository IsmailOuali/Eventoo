<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href=".././assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src=".././assets/js/init-alpine.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>

    <title>Events</title>
</head>

<body>
    <div class="container bg-gray-200 flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

        <div class="w-full overflow-hidden rounded-lg shadow-xs mt-10">
            <div class="w-full overflow-x-auto">
          <table class="w-full whitespace-no-wrap">
              <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Title</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">category</th>
                    <th class="px-4 py-3">Seats</th>
                    <th class="px-4 py-3">Location</th>
                    <th class="px-4 py-3">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @csrf
                @foreach ($events as $event)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            <div>
                                <p class="font-semibold">{{$event->title}}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm">{{$event->date}}</td>
                    <td class="px-4 py-3 text-sm">{{$event->category->name}}</td>
                    <td class="px-4 py-3 text-sm">{{$event->seats}}</td>
                    <td class="px-4 py-3 text-sm">{{$event->location}}</td>
                    <td class="px-4 py-3 text-xs">
                            @if($event->approved === 1 )
                            <button class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Approved</button>
                            @endif
                            @if ($event->approved === 0)
                            <button class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">Not Approved</button>
                            @endif
                    </td>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
      </div>
    </div>
</body>
</html>