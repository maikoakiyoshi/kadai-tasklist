 <header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
                <a class="navbar-brand" href="/">Tasklist</a>
            
            
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">{!! link_to_route('tasks.create', 'タスクの追加', [], ['class' => 'nav-link']) !!}
                   </ul>
             </nav>
        </header>