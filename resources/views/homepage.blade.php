<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="{{ asset('frontend/assets/style.css') }}">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background: rgb(199, 95, 95);">
  <main>

    <div class="container">
        <div class="todo-app">
                <h3>To-do App <span><i class="fa-solid fa-table-list"></i></span></h3>
                <div class="input">
                   <form action="{{ route('store') }}" method="post">
                   @csrf
                   <input name="title" type="text" placeholder="Add your text">
                    <button>Add</button>
                    
                   </form>
                   
                </div>
                <div class="all-todos">

                    <table>
                      @forelse ($todos as $key=>$todo)
                      <tr>
                        <td class="checked col"><span>{{ ++$key ."." }}</i></span>{{ $todo->title }}</td>
                        <td class="col action">
                          <a href="{{route('edit',$todo->id)}}">
                            <button class="btn"><i class="fa-regular fa-pen-to-square"></i></button>
                          </a>
                          <a href="{{route('delete', $todo->id)}}">
                            <button class="btn"><i class="fa-solid fa-trash"></i></button>
                          </a>
                          
                        </td>
                     </tr>
                      @empty
                        <h2>No data found😥</h2>
                      @endforelse
                        
                        
                        
                    </table>
                    <a href="{{ url('/view/trash') }}">
                      <button class="btn btn-primary my-2">Go-to Trash</button>
                    </a>
                    
                </div>
        </div>
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>