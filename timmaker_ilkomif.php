<?php
function input_members() {
    $members = [];
    echo "Masukkan nama anggota satu per satu (ketik 'done' untuk selesai):\n";
    while (true) {
        $member = readline("Nama anggota: ");
        if (strtolower($member) == 'done') {
            break;
        }
        $members[] = $member;
    }
    return $members;
}

function create_teams($members, $num_teams) {
    // Mengacak urutan anggota
    shuffle($members);
    
    // Membagi anggota menjadi beberapa tim
    $teams = array_fill(0, $num_teams, []);
    foreach ($members as $i => $member) {
        $teams[$i % $num_teams][] = $member;
    }
    return $teams;
}

// Masukkan nama anggota
$members = input_members();

// Tentukan jumlah tim yang ingin dibuat
$num_teams = (int)readline("Masukkan jumlah tim: ");

// Membuat tim
$teams = create_teams($members, $num_teams);

// Menampilkan tim yang telah dibuat
foreach ($teams as $i => $team) {
    echo "Tim " . ($i + 1) . ": " . implode(", ", $team) . "\n";
}
?>
