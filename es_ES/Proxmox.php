<?php
/**$
    Proxmox - es_ES
    CLIENTXCMS Translator system - Exported on 2023-07-26 10:57:47
    If you want to help you translate into your language, you can contact us via our support.
*/
return [
  'proxmox' => [
    'os' => 'Os',
    'template' => 'Modelo de SO',
    'offline' => 'offline',
    'online' => 'Online',
    'format' => 'Formato de disco',
    'size' => 'Tamaño del disco',
    'hostname' => 'Host',
    'memory' => 'Memoria',
    'bwlimit' => 'Ancho de banda',
    'console' => 'Consola',
    'disk' => 'Espacio en disco',
    'cores' => 'Cores',
    'cpuunits' => 'CPU',
    'net' => 'Net',
    'tasks' => 'Tareas',
    'uptime' => 'Disponibilidad',
    'cpu' => 'CPU',
    'button' => 'Conexión',
    'informations' => 'Información',
    'start' => 'Iniciar',
    'stop' => 'Parar',
    'shutdown' => 'Forzar apagado',
    'choosehostname' => 'Elige un nombre de host personalizado',
    'graph' => 'Gráficos',
    'unlimited' => 'Ilimitado',
    'panel' => [
      'problem' => 'Tienes un problema con el alojamiento ?',
      'openticket' => 'Abrir ticket!',
    ],
    'network' => [
      'title' => 'Red',
      'gw' => 'Puerta de enlace',
      'gw6' => 'Puerta de enlace v6',
      'ip' => 'Dirección IP',
      'firewall' => 'Firewall',
      'mtu' => 'Unidad máxima de transferencia de la interfaz',
      'ip6' => 'Dirección IP v6',
      'name' => 'Nombre',
      'bridge' => 'Puente',
      'hwaddr' => 'Dirección Mac',
      'type' => 'Tipo',
      'rate' => 'Velocidad de red',
      'link_down' => 'Desconectado',
      'virtio' => 'Virtio',
    ],
    'reboot' => 'Reiniciar',
    'snapshots' => [
      'title' => 'Instantáneas',
      'remaining' => 'Tienes %remaining% instantáneas permitidas.',
      'limit' => 'Ha alcanzado el número máximo de instantáneas permitidas.',
      'unauthorized' => 'No puedes hacer una instantánea',
      'success' => 'Instantánea guardada.',
      'success2' => 'Instantánea borrada.',
      'success3' => 'Instantánea restaurada.',
    ],
    'reinstall' => [
      'title' => 'Reinstalación',
      'remaining' => 'Tienes %remaining% instalaciones permitidas.',
      'limit' => 'Ha alcanzado el número máximo de desinstalaciones permitidas.',
      'success' => 'Instalación en curso.',
    ],
    'backups' => [
      'title' => 'Backups',
      'remaining' => 'Tienes %remaining% backups permitidos.',
      'limit' => 'Ha alcanzado el número máximo de copias de seguridad permitidas.',
      'success' => 'Backup Creado.',
      'success2' => 'Backup eliminado.',
      'success3' => 'Backup restaurado.',
      'unauthorized' => 'No puedes hacer una copia de seguridad',
    ],
    'config' => [
      'title' => 'Proxmox',
      'subtitle' => 'Configure tu oferta proxmox aquí',
    ],
    'form' => [
      'title' => 'Configuración de Proxmox',
      'block' => 'Bloque IP (por ejemplo, 123.223.134.XX / 24)',
      'importertitle' => 'Importador de bloques IP',
      'range' => 'Rango IP (Ej: 1-16)',
      'btn' => 'Importación rápida',
      'global' => [
        'title' => 'Información general',
      ],
      'restrictions' => [
        'title' => 'Restricciones',
        'snapshot' => 'Número de instantáneas permitido',
        'reinstall' => 'Número de reinstalaciones permitidas',
        'backup' => 'Número de backups permitido',
        'nolimit' => '0 para ilimitado',
        'unauthorized' => '0 para desactivar',
      ],
      'converter' => [
        'title' => 'Convertidor',
        'mb' => 'Introduzca el número en MB',
        'gb' => 'Introduzca su número en GB',
      ],
    ],
    'settings' => [
      'password' => 'Establezca una contraseña raíz aleatoria y envíela por correo electrónico a la entrega',
      'lxcparams' => 'Añadir parámetros al agregar la red',
      'lxcparamshelp' => 'Ejemplo: bridge=vmbr0,',
      'sshcommand' => 'Comando ejecutado al instalar un VPS',
      'sshexecutehelp' => 'Variables disponibles. Más información en<a href="%link%">documentación</a>',
      'sshexecutehelp2' => 'Si este comando está vacío, el comando configurado<a href="/admin/settings#proxmox">aqi</a>se ejecutará.',
    ],
    'admin' => [
      'ipaddress' => [
        'title' => 'Configuración IP',
        'subtitle' => 'Gestionar las diferentes direcciones IP.',
        'used' => 'Usada ?',
      ],
      'templates' => [
        'title' => 'Modelo',
        'subtitle' => 'Administrar las diferentes plantillas de Proxmox',
      ],
      'oses' => [
        'title' => 'Huesos',
        'subtitle' => 'Administrez les différents OS Proxmox',
      ],
      'title' => 'Configuración de Promox',
      'subtitle' => 'Administrar configuraciones ofrecidas.',
      'productname' => 'Nombre del producto',
      'type' => 'Tipo',
    ],
  ],
];