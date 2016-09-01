<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____  
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \ 
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/ 
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_| 
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 * 
 *
*/

/**
 * Minecraft: PE multiplayer protocol implementation
 */
namespace pocketmine\network\protocol;


interface Info{

	/**
	 * Minecraft: PE protocol versions
	 */
	const CURRENT_PROTOCOL = 90;
//	const NEWEST_PROTOCOL = 82;
//	const OLDEST_PROTOCOL = 81;
	const ACCEPTED_PROTOCOLS = [81, 82, 90];

	/**
	 * Minecraft: PE packets
	 */
	const LOGIN_PACKET = 0x01;
	const PLAY_STATUS_PACKET = 0x02;
	const DISCONNECT_PACKET = 0x05;
	const BATCH_PACKET = 0x06;
	const TEXT_PACKET = 0x07;
	const SET_TIME_PACKET = 0x08;
	const START_GAME_PACKET = 0x09;
	const ADD_PLAYER_PACKET = 0x0a;
	const ADD_ENTITY_PACKET = 0x0b;
	const REMOVE_ENTITY_PACKET = 0x0c;
	const ADD_ITEM_ENTITY_PACKET = 0x0d;
	
	const TAKE_ITEM_ENTITY_PACKET = 0x0f;
	const MOVE_ENTITY_PACKET = 0x10;
	const MOVE_PLAYER_PACKET = 0x11;
	
	const REMOVE_BLOCK_PACKET = 0x13;
	const UPDATE_BLOCK_PACKET = 0x14;
	const ADD_PAINTING_PACKET = 0x15;
	const EXPLODE_PACKET = 0x16;
	const LEVEL_EVENT_PACKET = 0x17; 
	const TILE_EVENT_PACKET = 0x18;
	const ENTITY_EVENT_PACKET = 0x19;
	const MOB_EFFECT_PACKET = 0x1a;
	const UPDATE_ATTRIBUTES_PACKET = 0x1b;
	const MOB_EQUIPMENT_PACKET = 0x1c;
	const MOB_ARMOR_EQUIPMENT_PACKET = 0x1d;
	
	//
	const INTERACT_PACKET = 0x1e;
	const USE_ITEM_PACKET = 0x1f;
	const PLAYER_ACTION_PACKET = 0x20;
	const HURT_ARMOR_PACKET = 0x21;
	const SET_ENTITY_DATA_PACKET = 0x22;
	const SET_ENTITY_MOTION_PACKET = 0x23;
	const SET_ENTITY_LINK_PACKET = 0x24;
	const SET_HEALTH_PACKET = 0x25;
	const SET_SPAWN_POSITION_PACKET = 0x26;
	const ANIMATE_PACKET = 0x27;
	const RESPAWN_PACKET = 0x28;
	const DROP_ITEM_PACKET = 0x29;
	
	const CONTAINER_OPEN_PACKET = 0x2b;
	const CONTAINER_CLOSE_PACKET = 0x2c;
	const CONTAINER_SET_SLOT_PACKET = 0x2d;
	const CONTAINER_SET_DATA_PACKET = 0x2e;
	const CONTAINER_SET_CONTENT_PACKET = 0x2f;
	const CRAFTING_DATA_PACKET = 0x30;
	const CRAFTING_EVENT_PACKET = 0x31;
	const ADVENTURE_SETTINGS_PACKET = 0x32;
	const TILE_ENTITY_DATA_PACKET = 0x33;
//	const PLAYER_INPUT_PACKET = 0x33;
	const FULL_CHUNK_DATA_PACKET = 0x35;
	const SET_DIFFICULTY_PACKET = 0x37;
//	const CHANGE_DIMENSION_PACKET = 0x36;
	const SET_PLAYER_GAMETYPE_PACKET = 0x39;
	const PLAYER_LIST_PACKET = 0x3a;
//	const TELEMETRY_EVENT_PACKET = 0x39;
//	const SPAWN_EXPERIENCE_ORB_PACKET = 0x3a;
//	const CLIENTBOUND_MAP_ITEM_DATA_PACKET = 0x3b;
//	const MAP_INFO_REQUEST_PACKET = 0x3c;
	const REQUEST_CHUNK_RADIUS_PACKET = 0x3f;
	const CHUNK_RADIUS_UPDATE_PACKET = 0x40;
	/*
	 * RiderJump 0x11
	 * ItemFrameDropItem 0x3f
	 * ReplaceSelectedItem 0x40
	 * ReplaceSelectedItem 0x41
	 */

}











