#import <Foundation/Foundation.h>
#import "SWGObject.h"
#import "SWGSource.h"


@protocol SWGSources
@end
  
@interface SWGSources : SWGObject


@property(nonatomic) NSArray<Optional, SWGSource>* sources;

@end
