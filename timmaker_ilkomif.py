import random

def input_members():
    members = []
    print("Kelompok Presentasi - ILKOMIF (SEM1) UNIPI Kamda Cisurupan, Garut ")
    while True:
        member = input("Nama Mahasiswa: ")
        if member.lower() == 'OK':
            break
        members.append(member)
    return members

def create_teams(members, num_teams):
   
    random.shuffle(members)
    teams = [[] for _ in range(num_teams)]
    for i, member in enumerate(members):
        teams[i % num_teams].append(member)
    
    return teams


members = input_members()

num_teams = int(input("Banyaknya Kelompok: "))


teams = create_teams(members, num_teams)


for i, team in enumerate(teams, 1):
    print(f"Tim {i}: {', '.join(team)}")
