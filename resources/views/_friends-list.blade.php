<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach (range(1,8) as $item)
        <li>
            <div class="flex item-center text-sm">
                <img src="https://i.pravatar.cc/50?u=fake@pravatar.com3" alt="" class="rounded-full mr-2">John Doe
            </div>
        </li>
    @endforeach

</ul>
