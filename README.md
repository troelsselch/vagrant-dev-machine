This repo contains a vagrant+ansible setup to create a development environment.

Original files from phansible.com

Todo
----

- create machine with jenkins
- create machine with solr

Requirements on host
--------------------

- ansible >= 1.6
- vagrant >= 1.5
- virtualbox
- nfsd (nfs-kernel-server)
  - sudo service nfs-kernel-server start
- NFS will not work if the destination folder on host is in the home directory and the home directory is encrypted. This is possibly why. See http://ubuntuforums.org/showthread.php?t=1527089.
  - So keep it in e.g. /opt and symlink to it from your workspace.

Optional
--------

- Add `192.168.33.10	myapp.loc` to `/etc/hosts`.

Running
-------

`vagrant up`

- Download box: ~20min
- Approx runtime for first up: 5min

Working with the environment
----------------------------

- Put your files in ./www. This will be Apaches document root.
- Access your site with 192.168.33.10 or (optionally) http://myapp.loc
- MariaDB credentials: See (and optionally update) `./ansible/vars/mariadb.yml`