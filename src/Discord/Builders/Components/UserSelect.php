<?php

declare(strict_types=1);

/*
 * This file is a part of the DiscordPHP project.
 *
 * Copyright (c) 2015-present David Cole <david.cole1340@gmail.com>
 *
 * This file is subject to the MIT license that is bundled
 * with this source code in the LICENSE.md file.
 */

namespace Discord\Builders\Components;

/**
 * Select menu for users.
 *
 * @link https://discord.com/developers/docs/components/reference#user-select
 *
 * @since 10.0.0
 *
 * @property int          $type           5 for a user select.
 * @property string       $custom_id      ID for the select menu; max 100 characters.
 * @property ?string|null $placeholder    Placeholder text if nothing is selected; max 150 characters.
 * @property ?array|null  $default_values List of default values for auto-populated select menu components; number of default values must be in the range defined by min_values and max_values.
 * @property ?int|null    $min_values     Minimum number of items that must be chosen (defaults to 1); min 0, max 25.
 * @property ?int|null    $max_values     Maximum number of items that can be chosen (defaults to 1); max 25.
 * @property ?bool|null   $disabled       Whether select menu is disabled (defaults to false).
 */
class UserSelect extends SelectMenu
{
    /**
     * Component type.
     *
     * @var int
     */
    protected $type = Component::TYPE_USER_SELECT;

    /**
     * Set if this component is required to be filled, default false. (Modal only).
     *
     * @param bool|null $required
     *
     * @return $this
     */
    public function setRequired(?bool $required = null): self
    {
        $this->required = $required;

        return $this;
    }
}
