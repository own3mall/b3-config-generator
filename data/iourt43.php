<?php
/**
 * BigBrotherBot Config File Generator
 * Author: Freelander (Özgür Uysal) <freelander@bigbrotherbot.net>
 * Author URI: http://www.bigbrotherbot.net
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/*-----------------------------------------------------------------------------*
 * URBAN TERROR 4.3 SETTINGS
 *-----------------------------------------------------------------------------*/
$game_name = 'Urban Terror 4.3';

/*******************************************************************************
 * Game Specific Settings
 *******************************************************************************/
$game_specific_settings = False;

/*******************************************************************************
 * Server Settings
 *******************************************************************************/
$server = array (
    'public_ip' => array (
        'formtype'   => 'text',
        'title'      => _('Public IP:'),
        'tooltip'    => _('Enter your game server\'s public IP.'),
        'default'    => '255.255.255.255'
    ),
    'port' => array (
        'formtype'   => 'text',
        'title'      => _('Server Port:'),
        'tooltip'    => _('Enter your game server\'s rcon (admin) port.'),
        'default'    => '28960'
    ),
    'rcon_ip' => array (
        'formtype'   => 'text',
        'title'      => _('Rcon IP:'),
        'tooltip'    => _('Enter your game server\'s rcon IP.'),
        'default'    => '127.0.0.1'
    ),
    'rcon_password' => array (
        'formtype'   => 'text',
        'title'      => _('Rcon Password:'),
        'tooltip'    => _('Enter your rcon password.'),
        'default'    => 'MYrCOnPaSS'
    ),
    'delay' => array (
        'formtype'   => 'text',
        'title'      => _('Delay:'),
        'tooltip'    => _('Delay between each log reading. Set a higher value to consume less disk resources or bandwidth if you remotely connect (ftp or http remote log access).'),
        'default'    => '0.33'
    ),
    'lines_per_second' => array (
        'formtype'   => 'text',
        'title'      => _('Lines per Second'),
        'tooltip'    => _('Number of lines to process per second. Set a lower value to consume less CPU resources.'),
        'default'    => '50'
    ),
    'max_line_length' => array(
        'formtype'   => 'text',
        'title'      => _('Max Line Length'),
        'tooltip'    => _('When sending in-game messages, lines will have at most this number of characters.'),
        'default'    => '80'
    ),
    'game_log' => array (
        'formtype'   => 'multioption',
        'title'      => _('Game Log File:'),
        'tooltip'    => _('Select your game log file location.'),
        'default'    => 'local',
        'options'    => array (
            'local' => array (
                'title'   => _('Local Path'),
                'hide'    => 10,
                'game_log_local' => array (
                    'title'      => _('Local Path:'),
                    'formtype'   => 'text',
                    'tooltip'    => _('Enter full path to your game log file.'),
                    'default'    => '/path/to/games.log'
                )
            ),
            'ftp' => array (
                'title' => _('FTP Location'),
                'hide'  => 11, //Unique number for hide div
                'game_log_ftpadr' => array (
                    'formtype'    => 'text',
                    'title'       => _('FTP Address:'),
                    'tooltip'     => _('Enter FTP address of your game log file including "ftp://" at the beginning.'),
                    'default'     => 'ftp://ftp.example.com/games/games_mp.log'
                ),
                'game_log_ftpusr' => array (
                    'formtype'   => 'text',
                    'title'      => _('FTP User:'),
                    'tooltip'    => _('Enter your ftp user name.'),
                    'default'    => 'ftpuser'
                ),
                'game_log_ftppas' => array (
                    'formtype'   => 'text',
                    'title'      => _('FTP Pass:'),
                    'tooltip'    => _('Enter your ftp password.'),
                    'default'    => 'FtPpASSw0Rd'
                )
            )
        )
    ),
    'permban_with_frozensand' => array (
        'formtype'   => 'select',
        'title'      => _('Permban with Frozen Sand:'),
        'tooltip'    => _("<p>Choose if you want your permanent bans to be sent to the Urban Terror official website.</p> <p>Your server needs to have the auth system active and the auth_owners cvar correctly set.</p> <p>You will have to unban from both B3 and the urbanterror.info website.</p>"),
        'default'    => 'no',
        'options'    => array (
            'yes' => _('yes'),
            'no'  => _('no')
        )
    ),
    'tempban_with_frozensand' => array (
        'formtype'   => 'select',
        'title'      => _('Tempban with Frozen Sand:'),
        'tooltip'    => _("<p>Choose if you want your temporary bans to be sent to the Urban Terror official website.</p> <p>Your server needs to have the auth system active and the auth_owners cvar correctly set.</p> <p>You will have to unban from both B3 and the urbanterror.info website.</p>"),
        'default'    => 'no',
        'options'    => array (
            'yes' => _('yes'),
            'no'  => _('no')
        )
    )
);

/*******************************************************************************
 * Built-in Plugins
 *******************************************************************************/
$builtin_plugins = array (
    'admin'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Admin',
        'tooltip'    => _('This plugin provides main B3 functionalities.'),
        'default'    => '@conf/plugin_admin.ini',
        'checked'    => True,
        'disabled'   => True
    ),
    'adv'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Advertise',
        'tooltip'    => _('Manages your server messages.'),
        'default'    => '@conf/plugin_adv.xml'
    ),
    'censor'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Censor',
        'tooltip'    => _('Censor bad words and bad names.'),
        'default'    => '@conf/plugin_censor.xml'
    ),
    'cmdmanager'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Commands Manager',
        'tooltip'    => _('Allows to modify command levels and aliases in-game.'),
        'default'    => '@conf/plugin_cmdmanager.ini'
    ),
    'login'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Login',
        'tooltip'    => _('Enable password authentication for server admins.'),
        'default'    => '@conf/plugin_login.ini'
    ),
    'pingwatch'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Ping Watch',
        'tooltip'    => _('Notifies players with high ping.'),
        'default'    => '@conf/plugin_pingwatch.ini'
    ),
    'spamcontrol'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Spam Control',
        'tooltip'    => _('Warns players who spams the in game chat.'),
        'default'    => '@conf/plugin_spamcontrol.ini'
    ),
    'stats'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Stats',
        'tooltip'    => _('Displays round based stats.'),
        'default'    => '@conf/plugin_stats.ini'
    ),
    'status'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Status',
        'tooltip'    => _('Writes server status to an xml file. This can be used by 3rd party tools to monitor server status.'),
        'default'    => '@conf/plugin_status.ini'
    ),
    'tk'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Team Kill',
        'tooltip'    => _('Punishes team killers'),
        'default'    => '@conf/plugin_tk.ini'
    ),
    'welcome'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Welcome',
        'tooltip'    => _('Welcomes players'),
        'default'    => '@conf/plugin_welcome.ini'
    )
);

/*******************************************************************************
 * External Plugins
 *******************************************************************************/
$external_plugins = array (
    'banlist' => array (
        'formtype'   => 'plugin',
        'title'      => 'Banlist',
        'tooltip'    => 'Allows easy sharing of cheater banlist between clans.',
        'default'    => '@b3/extplugins/conf/plugin_banlist.xml',
        'url'        => 'http://forum.bigbrotherbot.net/downloads/?sa=downfile&amp;id=6'
    ),
    'callvote' => array (
        'formtype'   => 'plugin',
        'title'      => 'Callvote',
        'tooltip'    => 'This plugin provides advanced features related to Urban Terror 4.2 callvotes.',
        'default'    => '@b3/extplugins/conf/plugin_callvote.ini',
        'url'        => 'http://forum.bigbrotherbot.net/downloads/?sa=downfile&id=240'
    ),
    'censorurt' => array (
        'formtype'   => 'plugin',
        'title'      => 'Censor UrT',
        'tooltip'    => 'With this plugin, B3 will mute/slap players who are badmouthing.',
        'default'    => '@b3/extplugins/conf/plugin_censorurt.xml',
        'url'        => 'http://forum.bigbrotherbot.net/downloads/?sa=downfile&id=90'
    ),
    'poweradminurt' => array (
        'formtype'   => 'plugin',
        'title'      => 'Poweradmin UrT',
        'tooltip'    => 'Adds extra admin abilities to default admin plugin.',
        'default'    => '@b3/extplugins/conf/plugin_poweradminurt.ini',
        'url'        => 'http://forum.bigbrotherbot.net/downloads/?sa=downfile&amp;id=1'
    ),
    'chatlogger' => array (
        'formtype'   => 'plugin',
        'title'      => 'Chatlogger',
        'tooltip'    => 'This plugin logs to database and/or file all clients\' messages (chat, team chat, private chat).',
        'default'    => '@b3/extplugins/conf/plugin_chatlogger.ini',
        'url'        => 'http://forum.bigbrotherbot.net/downloads/?sa=downfile&id=7'
    ),
    'jumper' => array (
        'formtype'   => 'plugin',
        'title'      => 'Jumper',
        'tooltip'    => 'This plugin provides an advanced statistics system for Urban Terror 4.2 Jump servers.',
        'default'    => '@b3/extplugins/conf/plugin_jumper.ini',
        'url'        => 'http://forum.bigbrotherbot.net/downloads/?sa=downfile&id=231'
    ),
    'xlrstats' => array (
        'formtype'   => 'plugin',
        'title'      => 'XLRstats',
        'tooltip'    => 'Records all player stats in your database.',
        'default'    => '@b3/extplugins/conf/plugin_xlrstats.ini',
        'url'        => 'http://www.xlrstats.com'
    )
);
