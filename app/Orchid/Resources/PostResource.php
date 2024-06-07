<?php

namespace App\Orchid\Resources;

use App\Models\Post;
use Orchid\Crud\Resource;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Sight;
use Orchid\Screen\TD;

class PostResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Post::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('title') // para mostrar 
            ->title('Title')
            ->placeholder('Ingrese el title here'),
            Input::make('content') // para mostrar 
            ->title('Content')
            ->placeholder('Ingrese el content here'),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),
            TD::make('title','TITLE'),
            TD::make('content', 'CONTENT'),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [
            // AQUI DEFINIMOS LOS CAMPOS DE DEFINIDOS 
            Sight::make('id','ID'),
            Sight::make('title','TITLE'),
            Sight::make('content','CONTENT'),
            Sight::make('created_at','DATE OF CREATION'),
            Sight::make('updated_at','UPDATE DATE'),
        
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
